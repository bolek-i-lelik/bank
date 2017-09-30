<?php

namespace backend\modules\employee\widgets;

use backend\modules\employee\models\Employee;
use Yii;
use yii\helpers\Json;
use yii\helpers\{Url, Html};
use yii\base\Widget;
use yii\web\JsExpression;
use yii\helpers\ArrayHelper;

use kartik\select2\Select2;

/**
 * Выбор отдела с помощью виджета Select2
 * не работает, отладить
 * echo SelectAjaxEmployee::widget(['form' => $form]);
 */
class SelectAjaxEmployee extends Widget
{
    public $form;
    public $model;
    public function run()
    {
        parent::run();
        $model = new Employee();
        $placeholder = [];
       /* if(is_array($model->department_id)) {
            foreach ($model->department_id as $a) {
                //$placeholder[$a] = \backend\modules\contragents\models\Contragent::find()->select(['name'])->where(['contragent_id' => $a])->asArray()->one()['name'];
            }
        }*/
        return $this->form->field($model, 'name')->widget(Select2::class,[
            'name' => 'employee',
            'size' => Select2::MEDIUM,
            'data'=>$placeholder,
            'options' => [
                'placeholder' => 'Укажите сотрудников',
            ],
            'pluginEvents' => [
                "change" => new \yii\web\JsExpression('function(){
                                 }'),
            ],
            'pluginOptions' => [
                'allowClear' => true,
                'minimumInputLength' => 0,
                'ajax' => [
                    'url' => '/employee/employee/select',
                    'dataType' => 'json',
                    'type' => 'get',
                    'data' => new JsExpression('function(params) { return {q:params.term}; }')
                ],
                'escapeMarkup' => new JsExpression('function (markup) { return markup; }'),
                'templateResult' => new JsExpression('function(brand) { return brand.text; }'),
                'templateSelection' => new JsExpression('function (brand) { return brand.text; }'),
            ],

        ])->label('Сотрудники');
    }
}