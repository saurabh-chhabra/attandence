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


    <script src="<?php echo $baseUrl ?>/js/transition.js"></script>
    <script src="<?php echo $baseUrl ?>/js/collapse.js"></script>
    <script src="<?php echo $baseUrl ?>/js/dropdown.js"></script>
    <script src="<?php echo $baseUrl ?>/js/button.js"></script>
    <script src="<?php echo $baseUrl ?>/js/tooltip.js"></script>
    <script src="<?php echo $baseUrl ?>/js/alert.js"></script>
    <script src="<?php echo $baseUrl ?>/js/jquery.slimscroll.min.js"></script>
    <script src="<?php echo $baseUrl ?>/js/widgster.js"></script>
    <script src="<?php echo $baseUrl ?>/js/pace.min.js"></script>
    <script src="<?php echo $baseUrl ?>/js/jquery.touchSwipe.js"></script>

    <!-- common app js -->
    <script src="<?php echo $baseUrl ?>/js/settings.js"></script>
    <script src="<?php echo $baseUrl ?>/js/app.js"></script>

    <!-- page specific libs -->
    <script src="<?php echo $baseUrl ?>/js/underscore.js"></script>
    <script src="<?php echo $baseUrl ?>/js/jquery.sparkline.js"></script>
    <script src="<?php echo $baseUrl ?>/js/d3.min.js"></script>
    <script src="<?php echo $baseUrl ?>/js/rickshaw.js"></script>
    <script src="<?php echo $baseUrl ?>/js/raphael-min.js"></script>
    <script src="<?php echo $baseUrl ?>/js/jquery.mapael.js"></script>
    <script src="<?php echo $baseUrl ?>/js/jquery.flot.js"></script>
    <script src="<?php echo $baseUrl ?>/js/MetroJs.js"></script>
    <script src="<?php echo $baseUrl ?>/js/skycons.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>


    <!-- page specific js -->
    <script src="<?php echo $baseUrl ?>/js/widgets.js"></script>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>