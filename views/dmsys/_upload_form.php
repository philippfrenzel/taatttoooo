<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use dosamigos\fileinput\FileInput;

?>

<div class="bg-color-darken opacity">
  By submitting a photo and/or story , you give us permission to share it with the community, 
  use and/or post it on our facebook, kickstarter, or any other social media page managed by us, 
  as well as modify it in anyway. <br>
  Your photos won’t be used in the book, so don’t worry so much about quality and composition. 
  But if it’s something really cool and we’d like more information or to meet up with you 
  for more details or pictures,  then make sure to leave you contact info!
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
