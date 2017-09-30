<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */

$this->title = 'Добавить отдел';
$this->params['breadcrumbs'][] = ['label' => 'Department', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
