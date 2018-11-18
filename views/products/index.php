<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'System Products';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-products-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            [
                'attribute' => 'id',
                'value' => function ($model){
                    return  Html::a('view', ['view', 'id' => $model->id], ['class' => 'btn btn-primary']);
                },
                'format' => 'raw',
            ],
            'name',
            'body',
            'price',
            [
                'value' => function ($model){
                    return  Html::a('add to cart', ['cart/add', 'id' => $model->id], ['class' => 'btn btn-success']);
                },
                'format' => 'raw',
            ],
        ],
    ]); ?>
</div>
