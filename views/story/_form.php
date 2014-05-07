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
        'action' => $model->isNewRecord ? Url::to(['/story/create']) : Url::to(['/story/update','id'=>$model->id]),
        //'options' => ['class' => 'form-horizontal'],
    ]); ?>

    <div class="row">
        <div class="col-md-12">
            <?= $form->field($model, 'content_tattoo')->textarea(['rows' => 7]) ?>
        </div>
    </div>

    <!--div class="row">
        <div class="col-md-6">
            <?php//= $form->field($model, 'content_past')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-md-6">
            <?php//= $form->field($model, 'content_present')->textarea(['rows' => 3]) ?>
        </div>
        <div class="col-md-6">
            <?php//= $form->field($model, 'content_future')->textarea(['rows' => 3]) ?>
        </div>
    </div/-->

    <?= Html::activeHiddenInput($model,'uId'); ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Submit' : 'Submit', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary pull-right']) ?>
    </div>

    <?php ActiveForm::end(); ?>
&nbsp;
</div>
