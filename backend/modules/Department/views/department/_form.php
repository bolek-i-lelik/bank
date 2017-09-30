<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iamsaint\datetimepicker\Datetimepicker;
use iamsaint\datetimepicker\Assets;
use kartik\select2\Select2;

Assets::register($this);

/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */
/* @var $form yii\widgets\ActiveForm */
?>
<?php $form = ActiveForm::begin(); ?>
    
    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
            </div>
        </div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('')->label('Наименование')  ?>
                    <?= $form->field($model, 'parent')->widget(Select2::className(),[
                            'data' => $model::getDepartments()
                    ])->label('Вышестоящее подразделение') ?>
                    <?= $form->field($model, 'manager')->widget(Select2::className(),[
                            'data' => \backend\modules\employee\models\Employee::getEmployees()
                    ])->label('Руководитель') ?>                   
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

