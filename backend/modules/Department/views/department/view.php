<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\modules\task\Task */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Department', 'url' => ['index']];
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
            'name',
            [                    
                'label' => 'Вышестоящее подразделение',
                'value' => $model->getParent($model->parent),            
            ],
            [                    
                'label' => 'Руководитель',
                'value' => $model->getManagerFIO($model->manager),            
            ],
        ],
    ]) ?>

</div>
