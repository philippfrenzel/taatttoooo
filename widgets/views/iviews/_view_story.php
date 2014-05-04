<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;

?>

<div class="postbox bg-color-darken opacity">
  <div class="teaseimg">
    <img src="<?= Url::to(['/dmsys/getlatestthumb','id'=>$model->id,'module'=>1]); ?>" style="height:25px" alt="thumb"/>
  </div>
</div>
