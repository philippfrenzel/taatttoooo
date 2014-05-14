<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use philippfrenzel\yii2fullpagejs\yii2fullpagejs;
use kartik\icons\Icon;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
Icon::map($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
	<meta charset="<?= Yii::$app->charset ?>"/>	
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<?php 
		$this->registerMetaTag(['name' => 'description','lang'=>'en', 'content' => Html::encode($this->context->metadescription)], 'meta-description');
		$this->registerMetaTag(['name' => 'keywords','lang'=>'en','content' => Html::encode($this->context->metakeywords)], 'meta-keywords');
	?>
	<title><?= Html::encode($this->title) ?></title>
	<link rel="icon" href="img/favicon.png" type="image/png">
	<?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
	
	<?php
			NavBar::begin([
				'id' => 'myMainMenu',
				'brandLabel' => '',
				'brandUrl' => Yii::$app->homeUrl,
				'options' => [
					'class' => 'navbar-inverse navbar-fixed-top',
				],
			]);

	?>

	<div class="navbar-brand">
		<img src="img/lonestarlogo_small.png" alt="Lonestar Love - Share your Tattoo and Story">
	</div>

	<?php
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => [
					['label' => 'Home', 'url' => ['/site/index'],'data-menuanchor'=>'slide1'],
					['label' => 'About', 'url' => ['/site/index#intro2'],'data-menuanchor'=>'intro2'],
					['label' => 'Tell Us!', 'url' => ['/site/index#intro3'],'data-menuanchor'=>'intro3'],
					['label' => 'Contact', 'url' => ['/site/contact']],
					Yii::$app->user->isGuest ?
						['label' => 'Login', 'url' => ['/user/security/login']] :
						['label' => 'Logout (' . Yii::$app->user->identity->username . ')' ,
							'url' => ['/user/security/logout'],
							'linkOptions' => ['data-method' => 'post']],
				],
			]);
			NavBar::end();
	?>

	<?= yii2fullpagejs::widget([
		'clientOptions'=>[
			'menu'=>'#myMainMenu'
		]
	]); ?>

<div id="onepage">	
	<?= $content ?>	
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
