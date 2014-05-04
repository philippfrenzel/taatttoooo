<?php

use yii\helpers\Html;
use yii\helpers\HtmlPurifier;

$arr = array();
$arr = explode("READMORE",$model->content,2);
$content = $arr[0];

?>

<div class="post-box">
  <div class="post-header">
    <div class="datebox pull-left c_gray">
      <?= date("M", strtotime($model->time_created)); ?><br>
      <?= date("d", strtotime($model->time_created)); ?>
    </div>
  </div>
</div>
