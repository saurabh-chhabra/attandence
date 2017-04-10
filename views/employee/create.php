<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\User */

$this->title = Yii::t('app', 'Create User');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Users'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Dashboard</a></li>
    <li class="active"><?= Html::encode($this->title) ?></a></li>
</ol>
<h1 class="page-header"><?= Html::encode($this->title) ?></h1>
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                </div>
                <h4 class="panel-title">New User</h4>
            </div>
            <div class="panel-body">
                <?= $this->render('_form', [
                        'model' => $model,
                ]) ?>
            </div>
        </div>
    </div>
</div>
