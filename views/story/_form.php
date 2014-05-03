<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
 * @var yii\web\View $this
 * @var app\models\Story $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="story-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'time_deleted')->textInput() ?>

    <?= $form->field($model, 'time_created')->textInput() ?>

    <?= $form->field($model, 'content_tattoo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content_past')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content_present')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'content_future')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'uId')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
