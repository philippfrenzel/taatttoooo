<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/**
 * @var yii\web\View $this
 * @var app\models\Story $model
 */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Stories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="story-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'id',
            'user_id',
            'content_tattoo:ntext',
            'content_past:ntext',
            'content_present:ntext',
            'content_future:ntext',
            'time_deleted:datetime',
            'time_created:datetime',
            'uId',
        ],
    ]) ?>

</div>
