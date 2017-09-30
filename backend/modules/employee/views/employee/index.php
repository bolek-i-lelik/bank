<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\TaskSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сотрудники';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="task-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'surname',
            'name',
            'father_name',
            [
                'attribute' => 'department_id',
                'format' => 'text',
                'label' => 'Подразделение',
                //'filter'=>$parent,
                'content' => function($model) {
                    return $model->getDepartment($model->department_id);
                }
            ],
            [
                'attribute' => 'created_at',
                'format' => 'text',
                'label' => 'Принят',
                //'filter'=>$parent,
                'content' => function($model) {
                    return date('d:m:Y', $model->created_at);
                }
            ],
            [
                'attribute' => 'dismissal_at',
                'format' => 'text',
                'label' => 'Уволен',
                //'filter'=>$parent,
                'content' => function($model) {
                    if(!empty($model->dismissal_at)){
                        return date('d:m:Y', $model->dismissal_at);
                    }else{
                        return '';
                    }
                }
            ],
            'avatar',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
