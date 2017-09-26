<?php

namespace backend\modules\employee\widgets;

use backend\modules\employee\models\Employee;
use backend\modules\employee\models\EmployeeSelect;
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
class SelectMultipleEmployee extends Widget
{
    public $form;
    public $model;
    public function run()
    {
        parent::run();
        $departments = Employee::find()->select(['id','concat(surname, " ", name)  as short_name'])->asArray()->all();
        $model = new EmployeeSelect();
        //var_dump($departments);exit();
        return $this->form->field($model, 'employees')->widget(Select2::class,[
            'name' => 'employees',
            'data' => ArrayHelper::map($departments, 'id', 'short_name'),
            'size' => Select2::MEDIUM,
            'options' => [
                'placeholder' => 'Укажите сотрудников',
                'multiple'=>true
            ],
        ])->label('Сотрудники');
    }
}