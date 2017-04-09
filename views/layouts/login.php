<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 25/8/16
 * Time: 3:24 PM
 */
use yii\helpers\Html;
use app\assets\AppAsset;

$baseUrl = Yii::$app->request->BaseUrl . "/web";

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href="<?php echo $baseUrl ?>/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="<?php echo $baseUrl ?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
    <link href="<?php echo $baseUrl ?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo $baseUrl ?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo $baseUrl ?>/css/animate.min.css" rel="stylesheet" />
    <link href="<?php echo $baseUrl ?>/css/style.min.css" rel="stylesheet" />
    <link href="<?php echo $baseUrl ?>/css/style-responsive.min.css" rel="stylesheet" />
    <link href="<?php echo $baseUrl ?>/css/theme/default.css" rel="stylesheet" id="theme" />
    <script src="<?php echo $baseUrl ?>/plugins/pace/pace.min.js"></script>
    <script src="<?php echo $baseUrl ?>/plugins/jquery/jquery-1.9.1.min.js"></script>
    <?php $this->head() ?>
</head>
<body class="pace-top bg-white">
<?php $this->beginBody() ?>
<div id="page-loader">
    <div class="material-loader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
        </svg>
        <div class="message">Loading...</div>
    </div>
</div>
<div id="page-container" class="fade">
    <div class="login login-with-news-feed">

        <div class="news-feed">
            <div class="news-image">
                <img src="<?php echo $baseUrl ?>/img/login-bg/bg-1.jpg" data-id="login-cover-image" alt="" />
            </div>
            <div class="news-caption">
                <h4 class="caption-title"><i class="material-icons text-cyan pull-left m-r-5">apps</i> GLOBAL TECH SECURITIES</h4>
                <p>
                    Specialized CRM For the Employess, Easily to Manage the Records
                </p>
            </div>
        </div>

<?= $content ;?>

    </div>

</div>
<script src="<?php echo $baseUrl ?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
<script src="<?php echo $baseUrl ?>/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
<script src="<?php echo $baseUrl ?>/plugins/bootstrap/js/bootstrap.min.js"></script>
<!--[if lt IE 9]>
<script src="<?php echo $baseUrl ?>/crossbrowserjs/html5shiv.js"></script>
<script src="<?php echo $baseUrl ?>/crossbrowserjs/respond.min.js"></script>
<script src="<?php echo $baseUrl ?>/crossbrowserjs/excanvas.min.js"></script>
<![endif]-->
<script src="<?php echo $baseUrl ?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo $baseUrl ?>/plugins/jquery-cookie/jquery.cookie.js"></script>
<!-- ================== END BASE JS ================== -->

<!-- ================== BEGIN PAGE LEVEL JS ================== -->
<script src="<?php echo $baseUrl ?>/js/apps.min.js"></script>
<!-- ================== END PAGE LEVEL JS ================== -->

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

