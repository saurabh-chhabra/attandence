<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 19/1/16
 * Time: 10:03 AM
 */
use yii\helpers\Html;

$roleId = Yii::$app->controller->userData->roll_id;
$fullName = Yii::$app->controller->userData->firstname . " " . Yii::$app->controller->userData->lastname ;

?>

<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <a href="#" data-toggle="nav-profile">
                    <div class="image">
                        <img src="<?= $baseUrl ?>/img/user.jpg" alt="" />
                    </div>
                    <div class="info">
                        <b class="caret pull-right"></b>
                        <?= $fullName ?>
                        <!--<small>Front end developer</small>-->
                    </div>
                </a>
            </li>
            <li>
                <ul class="nav nav-profile">
                    <li><a href="#"><i class="material-icons">settings</i> Settings</a></li>
                    <li><a href="#"><i class="material-icons">mode_edit</i> Send Feedback</a></li>
                    <li><a href="#"><i class="material-icons">help</i> Helps</a></li>
                </ul>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Menus</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <i class="material-icons">home</i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="material-icons">inbox</i>
                    <span>Employee</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="material-icons">toys</i>
                    <span>Customers</span>
                </a>

            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="material-icons">insert_drive_file</i>
                    <span>Packages</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="material-icons">grid_on</i>
                    <span>Sales</span>
                </a>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="material-icons">polymer</i>
                    <span>Invoice <span class="label label-theme m-l-5">NEW</span></span>
                </a>

            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <i class="material-icons">email</i>
                    <span>Reports</span>
                </a>
            </li>



            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>