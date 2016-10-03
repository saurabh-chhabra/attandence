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
                <?= Html::a('<span class="icon"><i class="fa fa-desktop"></i></span> Dashboard', ['/dashboard']) ?>
            </li>
            <?php if($roleId == 3){?>
            <li>
                <?= Html::a('<span class="icon"> <i class="fa fa-envelope"></i></span> Monthly Calc', ['dashboard/monthly-calculation']) ?>
            </li>
            <?php } ?>
            <?php if($roleId == 2){?>
            <li>
                <?= Html::a('<span class="icon"> <i class="fa fa-envelope"></i></span> Salary Details', ['dashboard/salary-details']) ?>
            </li>

            <li>
                <?= Html::a('<span class="icon"> <i class="fa fa-envelope"></i></span> Attendance Details', ['dashboard/attandence-details']) ?>
            </li>
            <?php } ?>
            <?php if($roleId == 3){?>
            <li>
                <?= Html::a('<span class="icon"> <i class="glyphicon glyphicon-stats"></i></span> Reports', ['dashboard/reports']) ?>
            </li>
            <?php } ?>
        </ul>
        <!-- every .sidebar-nav may have a title -->
        <?php if($roleId == 3){?>
        <h5 class="sidebar-nav-title">Employee <a class="action-link" href="#"><i class="glyphicon glyphicon-refresh"></i></a></h5>
        <ul class="sidebar-nav">

            <li>
                <?= Html::a('<span class="icon"><i class="glyphicon glyphicon-align-right"></i></span> Create', ['dashboard/create']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon"><i class="glyphicon glyphicon-tree-conifer"></i></span> Manage', ['dashboard/manage']) ?>
            </li>
            <li>
                <?= Html::a('<span class="icon"><i class="glyphicon glyphicon-th"></i></span> View', ['dashboard/view']) ?>
            </li>
        </ul>
        <?php } ?>

    </div>
</nav>