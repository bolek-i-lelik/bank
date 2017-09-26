<?php

namespace backend\modules\Task\widgets;

use backend\modules\Task\models\Task;
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
class SelectTask extends Widget
{
    public $form;
    public $model;
    public function run()
    {
        parent::run();
        $tasks = Task::find()->select(['id','name'])->asArray()->all();
        $model = new Task();
        //var_dump($tasks);exit();
        return $this->form->field($model, 'name')->widget(Select2::class,[
            'name' => 'tasks',
            'data' => ArrayHelper::map($tasks, 'id', 'name'),
            'size' => Select2::MEDIUM,
            'options' => [
                'placeholder' => 'Укажите задачу',
            ],
        ])->label('Задача');
    }
}