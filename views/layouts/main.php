<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
AppAsset::register($this);
$baseUrl = Yii::$app->request->baseUrl . "/web";
$baseUrl1 = Yii::$app->request->baseUrl;
?>
<?php $this->beginPage() ?>


    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <link href="<?php echo $baseUrl ?>/css/application.min.css" rel="stylesheet">
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>
    <?php include('left-nav.php');?>
    <?php include('top-nav.php');?>
    <div class="content-wrap">
        <main id="content" class="content" role="main">
            <?= $content; ?>
        </main>
    </div>
    <div class="loader-wrap hiding hide">
    <i class="fa fa-circle-o-notch fa-spin-fast"></i>
    </div>


    <script src="<?php echo $baseUrl ?>/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/transition.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/collapse.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/dropdown.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/button.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/tooltip.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/bootstrap-sass/vendor/assets/javascripts/bootstrap/alert.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/jQuery-slimScroll/jquery.slimscroll.min.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/widgster/widgster.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/pace.js/pace.min.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/jquery-touchswipe/jquery.touchSwipe.js"></script>

    <!-- common app js -->
    <script src="<?php echo $baseUrl ?>/js/settings.js"></script>
    <script src="<?php echo $baseUrl ?>/js/app.js"></script>

    <!-- page specific libs -->
    <script src="<?php echo $baseUrl ?>/vendor/underscore/underscore.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/jquery.sparkline/dist/jquery.sparkline.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/d3/d3.min.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/rickshaw/rickshaw.min.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/raphael/raphael-min.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/jQuery-Mapael/js/jquery.mapael.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/flot/jquery.flot.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/MetroJS/release/MetroJs.Full/MetroJs.js"></script>
    <script src="<?php echo $baseUrl ?>/vendor/skycons/skycons.js"></script>

    <!-- page specific js -->
    <script src="<?php echo $baseUrl ?>/js/widgets.js"></script>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>