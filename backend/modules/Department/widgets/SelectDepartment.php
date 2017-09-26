<?php

namespace backend\modules\Department\widgets;

use backend\modules\Department\models\Department;
use Yii;
use yii\helpers\{Url, Html};
use yii\base\Widget;
use yii\web\JsExpression;
use yii\helpers\ArrayHelper;

use kartik\select2\Select2;

/**
 * Выбор отдела с помощью виджета Select2
 * echo SelectDepartment::widget(['form' => $form]);
 */
class SelectDepartment extends Widget
{
    public $form;
    public $model;
    public function run()
    {
        parent::run();
        $departments = Department::find()->select(['id','name'])->asArray()->all();
        $model = new \backend\modules\Department\models\Department();
        //var_dump($departments);exit();
        return $this->form->field($model, 'name')->widget(Select2::class,[
            'name' => 'departments',
            'data' => ArrayHelper::map($departments, 'id', 'name'),
            'size' => Select2::MEDIUM,
            'options' => [
                'placeholder' => 'Укажите отдел',
            ],
        ])->label('Отделы');
    }
}