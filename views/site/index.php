<?php
/**
 * @var yii\web\View $this
 */
$this->title = 'Lonestar Love - Texas in your heart and mind!';
?>
<div class="section" id="intro1" data-anchor="intro1">
    <?= $this->render('onepage/first_page', []); ?>
</div>
<div class="section" id="intro2" data-anchor="intro2">
    <?= $this->render('onepage/thrd_page', []); ?>
</div>
<div class="section" id="intro3" data-anchor="intro3">
    <?= $this->render('onepage/scnd_page', ['model' => $model,'dmsysmodel'=>$dmsysmodel]); ?>
</div>
