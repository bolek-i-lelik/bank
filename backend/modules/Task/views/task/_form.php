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

    <?= $form->field($model, 'name')->textInput(['maxlength' => true])->hint('')->label('Наименование задачи') ?>

    <?= $form->field($model, 'description')->textarea(['maxlength' => true])->hint('')->label('Описание задачи')  ?>

    <?= $form->field($model, 'date_deadline')->widget(Datetimepicker::className(),[
        'options' => [
            'lang' => 'ru',
            'value' => date('d.m.Y'),
            'formatDate' => 'd...m...Y',
            'format' => 'd.m.Y G:i:s',
        ]
    ])->label('Крайний срок'); ?>

        <?= $form->field($model, 'responsible')->widget(Select2::className(),[
                'data' => \backend\modules\employee\models\Employee::find()->select(['concat(surname, " ", name)'])->asArray()->all()
        ])->label('Исполнитель') ?>

    <?php echo \backend\modules\Department\widgets\SelectMultipleDepartment::widget(['form' => $form]) ?>
    <!--<?= $form->field($model, 'deadline')->textInput() ?>

    <?= $form->field($model, 'importance')->textInput() ?>

    <?= $form->field($model, 'responsible')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'director')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'observer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'coauthor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'parent')->textInput() ?>-->

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
