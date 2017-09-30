<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */

$this->title = 'Добавить сщтрудника';
$this->params['breadcrumbs'][] = ['label' => 'Employee', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
