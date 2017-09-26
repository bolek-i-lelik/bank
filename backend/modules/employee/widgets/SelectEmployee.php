<?php

namespace backend\modules\employee\widgets;

use backend\modules\employee\models\Employee;
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
class SelectEmployee extends Widget
{
    public $form;
    public $model;
    public function run()
    {
        parent::run();
        $employees = Employee::find()->select(['id','concat(surname, " ", name)  as short_name'])->asArray()->all();
        $model = new Employee();
        //var_dump($departments);exit();
        return $this->form->field($model, 'name')->widget(Select2::class,[
            'name' => 'employees',
            'data' => ArrayHelper::map($employees, 'id', 'short_name'),
            'size' => Select2::MEDIUM,
            'options' => [
                'placeholder' => 'Укажите сотрудника',
            ],
        ])->label('Сотрудник');
    }
}