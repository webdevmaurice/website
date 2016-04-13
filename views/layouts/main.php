<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" ng-app="app">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="libs/angular.min.js"></script>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid" ng-controller="appController">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse1" aria-expanded="false">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><h2>MauriRent</h2></a>
        </div>
        <div class="navbar- collapse navbar-collapse" id="collapse1" style="padding-left: 500px;">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Latest <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Apartments</a></li>
                <li><a href="#">Bungalows</a></li>
                <li><a href="#">Hotels</a></li>
                <li><button ng-click="login()" class="btn btn-default">Login</button></li>
                <li><button ng-click="register()" class="btn btn-default">Register</button></li>
                <li><button ng-click="fnLogout()" class="btn btn-default">Logout</button></li>
            </ul>
        </div>

    </div>
</nav>
<div class="container">

    <div class="codrops-top clearfix">
        <a href="http://tympanus.net/Development/AutomaticImageMontage/"><span>&laquo; Previous Demo: </span>Automatic Image Montage</a>
				<span class="right">
					<a target="_blank" href="http://www.flickr.com/photos/strupler/">Images by <strong>ND Strupler</strong></a>
					<a href="http://tympanus.net/codrops/?p=5657"><strong>Back to the Codrops Article</strong></a>
				</span>
    </div>

    <h1>Slicebox <span>A fresh 3D image slider with graceful fallback</span></h1>

    <div class="more">
        <ul id="sb-examples">
            <li>More examples:</li>
            <li><a href="index.html">Example 1</a></li>
            <li class="selected"><a href="index2.html">Example 2</a></li>
            <li><a href="index3.html">Example 3</a></li>
            <li><a href="index4.html">Example 4</a></li>
        </ul>
    </div>

    <div class="wrapper">

        <ul id="sb-slider" class="sb-slider">
            <li>
                <a href="http://www.flickr.com/photos/strupler/2969141180" target="_blank"><img src="images/1.jpg" alt="image1"/></a>
                <div class="sb-description">
                    <h3>Creative Lifesaver</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2968268187" target="_blank"><img src="images/2.jpg" alt="image2"/></a>
                <div class="sb-description">
                    <h3>Honest Entertainer</h3>
                </div>
            </li>
            <li>
                <a href="http://www.flickr.com/photos/strupler/2968114825" target="_blank"><img src="images/3.jpg" alt="image1"/></a>
                <div class="sb-description">
                    <h3>Brave Astronaut</h3>
                </div>
            </li>
        </ul>

        <div id="shadow" class="shadow"></div>

        <div id="nav-arrows" class="nav-arrows">
            <a href="#">Next</a>
            <a href="#">Previous</a>
        </div>

        <div id="nav-options" class="nav-options">
            <span id="navPlay">Play</span>
            <span id="navPause">Pause</span>
        </div>

    </div><!-- /wrapper -->

    <p class="info"><strong>Example 2:</strong> Slideshow with play &amp; pause and horizontal slices</p>

</div>
<div class="wrap">
    <!--?php
    NavBar::begin([
        'brandLabel' => 'My Company',
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'About', 'url' => ['/site/about']],
            ['label' => 'Contact', 'url' => ['/site/contact']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?-->

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
