<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;

?>

<div class="bg-color-darken opacity">
  <div class="teaseimg">
    <img src="<?= Url::to(['/dmsys/getlatestthumb','id'=>$model->id,'module'=>1]); ?>" alt="thumb"/>
  </div>
</div>
