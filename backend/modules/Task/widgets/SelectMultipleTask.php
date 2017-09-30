<?php

namespace backend\modules\Task\widgets;

use backend\modules\Task\models\Task;
use backend\modules\Task\models\TaskSelect;
use Yii;
use yii\helpers\{Url, Html};
use yii\base\Widget;
use yii\web\JsExpression;
use yii\helpers\ArrayHelper;

use kartik\select2\Select2;

/**
 * Выбор отдела с помощью виджета Select2
 * echo SelectEmployee::widget(['form' => $form]);
 */
class SelectMultipleTask extends Widget
{
    public $form;
    public $model;
    public function run()
    {
        parent::run();
        $departments = Task::find()->select(['id','name'])->asArray()->all();
        $model = new TaskSelect();
        //var_dump($departments);exit();
        return $this->form->field($model, 'tasks')->widget(Select2::class,[
            'name' => 'tasks',
            'data' => ArrayHelper::map($departments, 'id', 'name'),
            'size' => Select2::MEDIUM,
            'options' => [
                'placeholder' => 'Укажите задачи',
                'multiple'=>true
            ],
        ])->label('Задачи');
    }
}