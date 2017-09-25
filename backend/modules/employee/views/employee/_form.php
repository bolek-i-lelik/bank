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

<div class="task-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('')->label('Name') ?>

    <?= $form->field($model, 'surname')->textarea(['maxlength' => true])->hint('')->label('Name2')  ?>
    <?= $form->field($model, 'user_id')->textInput() ?>
    <?= $form->field($model, 'patronymic')->textInput() ?>
    <?= $form->field($model, 'department_id')->textInput() ?>
    <?= $form->field($model, 'avatar')->textInput() ?>
    <?= $form->field($model, 'created_at')->textInput() ?>
    <?= $form->field($model, 'dismissal_at')->textInput() ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
