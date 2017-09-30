<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Подразделения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'name',
            [
                'attribute' => 'parent',
                'format' => 'text',
                'label' => 'Вышестоящее подразделение',
                //'filter'=>$parent,
                'content' => function($model) {
                    return $model->getParent($model->parent);
                }
            ],
            [
                'attribute' => 'manager',
                'format' => 'text',
                'label' => 'Руководитель',
                //'filter'=>$manager,
                'content' => function($model) {
                    return $model->getManagerFIO($model->manager);
                }
            ],
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
