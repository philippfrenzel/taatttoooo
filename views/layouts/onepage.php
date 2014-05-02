<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

use philippfrenzel\yii2fullpagejs\yii2fullpagejs;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
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
		<img src="img/LogoTaatttooooNavbar.png" alt="Taatttoooo - Share your Tattoo and Story">
	</div>

	<?php
			echo Nav::widget([
				'options' => ['class' => 'navbar-nav navbar-right'],
				'items' => [
					['label' => 'Home', 'url' => ['/site/index'],'data-menuanchor'=>'intro1'],
					['label' => 'About', 'url' => ['#'],'data-menuanchor'=>'intro2'],
					['label' => 'Contact', 'url' => ['/site/contact']],
					Yii::$app->user->isGuest ?
						['label' => 'Login', 'url' => ['/site/login']] :
						['label' => 'Logout (' . Yii::$app->user->identity->username . ')' ,
							'url' => ['/site/logout'],
							'linkOptions' => ['data-method' => 'post']],
				],
			]);
			NavBar::end();
	?>

	<?= yii2fullpagejs::widget([
		'clientOptions'=>[
			//'menu'=>'#myMainMenu'
		]
	]); ?>

	
	<?= $content ?>	
	
	
	<footer class="footer">
		<div class="container">
			<p class="pull-left">&copy; Taatttoooo.com <?= date('Y') ?></p>
			<p class="pull-right"><?= Yii::powered() ?></p>
		</div>
	</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
