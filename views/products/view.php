<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\products\SystemProducts */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'System Products', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="system-products-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('add to cart', ['cart/add', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'body',
            'price',
        ],
    ]) ?>

</div>
