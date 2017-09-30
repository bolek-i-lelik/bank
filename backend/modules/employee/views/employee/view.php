<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => '?', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-view">

    <p>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [                    
                'label' => 'ФИО',
                'value' => $model->surname.' '.$model->name.' '.$model->father_name,            
            ],
            [
                'label' => 'Подразделение',
                'value' => $model->getDepartment($model->department_id),
            ],
            [
                'label' => 'Принят',
                'value' => date('d-m-Y', $model->created_at),
            ],
        ],
    ]) ?>

</div>
