<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use dosamigos\fileinput\FileInput;

?>

<div class="bg-color-darken opacity">
  Here you can select a file from your local file system and upload it
  to our "photoshopers". If you have questions, pls. send us an email to
  photoshopers (at) taatttooo com! Thanks!
  <hr/>

<?php
  $query = $model->getAdapterForFiles($model->dms_module,$model->dms_id);
  $results = $query->all();
  foreach($results as $result):
?>

  <img src="<?= Url::to(['/dmsys/getthumb','id'=>$result->id]); ?>" alt="thumb"/>

<?php endforeach; ?>  
  <hr/>

<?php $form = ActiveForm::begin([
  'action' => Url::to(['/dmsys/attachfile']),
  'method' => 'post',
  'options' => [
   'enctype' => 'multipart/form-data',
  ]
]); ?>

<?= FileInput::widget([
  'model' => $model,
  'attribute' => 'fileattachement', // image is the attribute
  // using STYLE_IMAGE allows me to display an image. Cool to display previously
  'style' => FileInput::STYLE_BUTTON
]);?>

<?= Html::activeHiddenInput($model,'dms_module'); ?>
<?= Html::activeHiddenInput($model,'dms_id'); ?>
<?= Html::activeHiddenInput($model,'uId'); ?>

<?= Html::submitButton(\Yii::t('app','Upload'), ['class' => 'btn btn-info pull-right']) ?>

<?php ActiveForm::end(); ?>

</div>
