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

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('')->label('Наименование отдела') ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
