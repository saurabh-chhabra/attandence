<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 19/1/16
 * Time: 10:03 AM
 */
use yii\helpers\Html;

$roleId = Yii::$app->controller->userData->roll_id;

?>

<nav id="sidebar" class="sidebar" role="navigation">
    <div class="js-sidebar-content">
        <header class="logo hidden-xs">
            <?php echo Html::a('Farekit', ['site/dashboard']) ?>
        </header>
        <div class="sidebar-status visible-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="thumb-sm avatar pull-right">
                    <img class="img-circle" src="<?php echo $baseUrl ?>/img/people/a5.jpg" alt="...">
                </span>
                <span class="circle bg-warning fw-bold text-gray-dark">
                    13
                </span>
                &nbsp;&nbsp;
                <?= Yii::$app->user->identity->firstname ?> <strong><?= Yii::$app->user->identity->lastname ?></strong>
                <b class="caret"></b>
            </a>

        </div>

        <ul class="sidebar-nav">
            <li class="active">
                <?= Html::a('<span class="icon"><i class="fa fa-desktop"></i></span> Dashboard', ['site/dashboard']) ?>
            </li>
            <?php if($roleId == 3){?>
            <li>
                <?= Html::a('<span class="icon"> <i class="fa fa-envelope"></i></span> Monthly Calc', ['site/dashboard']) ?>
            </li>
            <?php } ?>
            <?php if($roleId == 2){?>
            <li>
                <?= Html::a('<span class="icon"> <i class="fa fa-envelope"></i></span> Salary Details', ['site/dashboard']) ?>
            </li>

            <li>
                <?= Html::a('<span class="icon"> <i class="fa fa-envelope"></i></span> Attendance Details', ['site/dashboard']) ?>
            </li>
            <?php } ?>
            <?php if($roleId == 3){?>
            <li>
                <?= Html::a('<span class="icon"> <i class="glyphicon glyphicon-stats"></i></span> Reports', ['site/dashboard']) ?>
            </li>
            <?php } ?>
        </ul>
        <!-- every .sidebar-nav may have a title -->
        <?php if($roleId == 3){?>
        <h5 class="sidebar-nav-title">Employee <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
        <ul class="sidebar-nav">
            <li>
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a class="collapsed" href="#sidebar-forms" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-align-right"></i>
                    </span>
                    Create

            </li>
            <li>
                <a class="collapsed" href="#sidebar-ui" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <i class="glyphicon glyphicon-tree-conifer"></i>
                    </span>
                    Manage
            </li>
            <li>
                <a href="grid.html">
                    <span class="icon">
                        <i class="glyphicon glyphicon-th"></i>
                    </span>
                    View
                </a>
            </li>
        </ul>
        <?php } ?>

    </div>
</nav>