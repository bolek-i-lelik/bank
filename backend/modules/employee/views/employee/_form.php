<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iamsaint\datetimepicker\Datetimepicker;
use iamsaint\datetimepicker\Assets;
use kartik\select2\Select2;
use backend\modules\user\models\User;

Assets::register($this);

/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="task-form">

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
                    <?= $form->field($model, 'surname')->textInput(['maxlength' => true])->hint('')->label('Фамилия')  ?>
                    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('')->label('Имя') ?>
                    <?= $form->field($model, 'father_name')->textInput(['maxlength' => true])->hint('')->label('Отчество') ?>
                    <?= $form->field($model, 'user_id')->widget(Select2::className(),[
                            'data' => \backend\modules\user\models\User::getUsers()
                    ])->label('Пользователь') ?>                   
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?= $form->field($model, 'department_id')->widget(Select2::className(),[
                            'data' => \backend\modules\Department\models\Department::getDepartments()
                    ])->label('Подразделение') ?>
                    <?= $form->field($model, 'avatar')->textInput() ?>
                </div>
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
