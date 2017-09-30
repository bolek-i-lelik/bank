<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\date\DatePicker;
use iamsaint\datetimepicker\Assets;

/* @var $this yii\web\View */
/* @var $searchModel backend\modules\user\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['/site/signup'], ['class' => 'btn btn-success btn-sm']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            'first_name',
            'last_name',
             'email:email',
            [
                'attribute' => 'created_at',
                'label' => '<i class="fa fa-calendar"></i> Добавлен',
                'encodeLabel' => false,
                'filter' => Datepicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'created_at',
                    'pluginOptions' => [
                        'format' => 'dd-mm-yyyy',
                        'todayHighlight' => true
                    ],
                ]),
                'value' => function ($model) {
                    return date('d-m-Y', $model->created_at);
                },
            ],
            [
                'attribute' => 'updated_at',
                'label' => '<i class="fa fa-calendar"></i> Изменён',
                'encodeLabel' => false,
                'filter' => Datepicker::widget([
                    'model' => $searchModel,
                    'attribute' => 'updated_at',
                    'pluginOptions' => [
                        'format' => 'dd-mm-yyyy',
                        'todayHighlight' => true
                    ],
                ]),
                'value' => function ($model) {
                    return date('d-m-Y', $model->updated_at);
                },
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
