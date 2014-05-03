<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\StorySearch $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="story-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'content_tattoo') ?>

    <?= $form->field($model, 'content_past') ?>

    <?= $form->field($model, 'content_present') ?>

    <?php // echo $form->field($model, 'content_future') ?>

    <?php // echo $form->field($model, 'time_deleted') ?>

    <?php // echo $form->field($model, 'time_created') ?>

    <?php // echo $form->field($model, 'uId') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
