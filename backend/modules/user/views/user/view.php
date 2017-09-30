<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\user\models\User */

$this->title = $model->first_name.' '.$model->last_name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('<i class="fa fa-arrow-left"></i>', ['index'], [
            'class' => 'btn btn-sm btn-default full-opacity-hover',
            'title' => 'Назад',
            'data' => [
                'toggle' => 'tooltip',
                'placement' => 'bottom'
            ]
        ]); ?>
        <?= Html::a('Изменить', ['update', 'id' => $model->id], [
                'class' => 'btn btn-sm btn-primary'
        ]) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-sm btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'email:email',
            'status',
            [
                'label' => 'Создан',
                'value' => date('d-m-Y', $model->created_at),
            ],
            [
                'label' => 'Изменён',
                'value' => date('d-m-Y', $model->updated_at),
            ],
        ],
    ]) ?>

</div>
