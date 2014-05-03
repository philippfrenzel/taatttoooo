<?php

use yii\helpers\Html;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var app\models\StorySearch $searchModel
 */

$this->title = 'Stories';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="story-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Story', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'user_id',
            'content_tattoo:ntext',
            'content_past:ntext',
            'content_present:ntext',
            // 'content_future:ntext',
            // 'time_deleted:datetime',
            // 'time_created:datetime',
            // 'uId',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
