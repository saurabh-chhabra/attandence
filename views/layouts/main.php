<?php
/* @var $this \yii\web\View */
/* @var $content string */
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?= $baseUrl?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/animate.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/style.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
        <link href="<?= $baseUrl?>/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/morris/morris.css" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?= $baseUrl?>/plugins/pace/pace.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="<?= $baseUrl?>/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/animate.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/style.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/style-responsive.min.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/css/theme/default.css" rel="stylesheet" id="theme" />
        <!-- ================== END BASE CSS STYLE ================== -->

        <!-- ================== BEGIN PAGE LEVEL CSS STYLE ================== -->
        <link href="<?= $baseUrl?>/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/bootstrap-calendar/css/bootstrap_calendar.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/gritter/css/jquery.gritter.css" rel="stylesheet" />
        <link href="<?= $baseUrl?>/plugins/morris/morris.css" rel="stylesheet" />
        <!-- ================== END PAGE LEVEL CSS STYLE ================== -->

        <!-- ================== BEGIN BASE JS ================== -->
        <script src="<?= $baseUrl?>/plugins/pace/pace.min.js"></script>

        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
    </head>

    <body>
    <?php $this->beginBody() ?>
    <div id="page-loader">
        <div class="material-loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
            </svg>
            <div class="message">Loading...</div>
        </div>
    </div>
    <div id="page-container" class="fade page-sidebar-fixed page-header-fixed page-with-wide-sidebar">
        <!-- begin #header -->
        <?php include('top-nav.php');?>
        <!-- end #header -->

        <!-- begin #sidebar -->
        <?php include('left-nav.php');?>
        <div class="sidebar-bg"></div>
        <!-- end #sidebar -->

        <!-- begin #content -->
        <div id="content" class="content">
            <?= $content ?>
        </div>
        <!-- end #content -->

        <!-- begin theme-panel -->
        <div class="theme-panel">
            <a href="javascript:;" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
            <div class="theme-panel-content">
                <h5 class="m-t-0">Color Theme</h5>
                <ul class="theme-list clearfix">
                    <li class="active"><a href="javascript:;" class="bg-cyan" data-theme="default" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Default/Cyan">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-blue" data-theme="blue" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Blue">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-purple" data-theme="purple" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Purple">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-orange" data-theme="orange" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Orange">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-red" data-theme="red" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Red">&nbsp;</a></li>
                    <li><a href="javascript:;" class="bg-black" data-theme="black" data-click="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Black">&nbsp;</a></li>
                </ul>
                <div class="divider"></div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Header Styling</div>
                    <div class="col-md-7">
                        <select name="header-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">inverse</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Header</div>
                    <div class="col-md-7">
                        <select name="header-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Styling</div>
                    <div class="col-md-7">
                        <select name="sidebar-styling" class="form-control input-sm">
                            <option value="1">default</option>
                            <option value="2">grid</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label">Sidebar</div>
                    <div class="col-md-7">
                        <select name="sidebar-fixed" class="form-control input-sm">
                            <option value="1">fixed</option>
                            <option value="2">default</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-5 control-label double-line">Sidebar Gradient</div>
                    <div class="col-md-7">
                        <select name="content-gradient" class="form-control input-sm">
                            <option value="1">disabled</option>
                            <option value="2">enabled</option>
                        </select>
                    </div>
                </div>
                <div class="row m-t-10">
                    <div class="col-md-12">
                        <a href="#" class="btn btn-inverse btn-block btn-sm" data-click="reset-local-storage"><i class="fa fa-refresh m-r-3"></i> Reset Local Storage</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- end theme-panel -->

        <!-- begin scroll to top btn -->
        <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
        <!-- end scroll to top btn -->
    </div>






    <script src="<?= $baseUrl?>/plugins/jquery/jquery-1.9.1.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/bootstrap/js/bootstrap.min.js"></script>

    <!--[if lt IE 9]>
        <script src="assets/crossbrowserjs/html5shiv.js"></script>
        <script src="assets/crossbrowserjs/respond.min.js"></script>
        <script src="assets/crossbrowserjs/excanvas.min.js"></script>
    <![endif]-->
    <script src="<?= $baseUrl?>/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/jquery-cookie/jquery.cookie.js"></script>
    <!-- ================== END BASE JS ================== -->

    <!-- ================== BEGIN PAGE LEVEL JS ================== -->
    <script src="<?= $baseUrl?>/plugins/morris/raphael.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/morris/morris.js"></script>
    <script src="<?= $baseUrl?>/plugins/jquery-jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/jquery-jvectormap/jquery-jvectormap-world-merc-en.js"></script>
    <script src="<?= $baseUrl?>/plugins/bootstrap-calendar/js/bootstrap_calendar.min.js"></script>
    <script src="<?= $baseUrl?>/plugins/gritter/js/jquery.gritter.js"></script>
    <script src="<?= $baseUrl?>/js/dashboard-v2.min.js"></script>
    <script src="<?= $baseUrl?>/js/apps.min.js"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->

    <script>
        $(document).ready(function() {
            App.init();
            DashboardV2.init();
        });
    </script>



    <?php $this->endBody() ?>
    </body>
    </html>
<?php $this->endPage() ?>