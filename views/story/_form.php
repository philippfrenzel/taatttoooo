<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var app\models\Story $model
 * @var yii\widgets\ActiveForm $form
 */
?>

<div class="story-form">

    <?php $form = ActiveForm::begin([
        'id'=> 'storyform',
        'action' => Url::to(['/story/create']),
        'options' => ['class' => 'form-horizontal'],
    ]); ?>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'content_tattoo')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'content_past')->textarea(['rows' => 3]) ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $form->field($model, 'content_present')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'content_future')->textarea(['rows' => 3]) ?>
        </div>
    </div>

    <?= $form->field($model, 'uId')->textInput(['maxlength' => 255]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
