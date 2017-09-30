<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */

$this->title = 'Изменить';
$this->params['breadcrumbs'][] = ['label' => 'employee', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="task-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
