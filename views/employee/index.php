<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Users');
$this->params['breadcrumbs'][] = $this->title;
?>
<ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Dashboard</a></li>
    <li class="active"><?= Html::encode($this->title) ?></a></li>
</ol>
<h1 class="page-header">Employee</h1>
<div class="user-index">
    <div class="row">
        <?php Pjax::begin(); ?>    <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'columns' => [
                ['class' => 'yii\grid\SerialColumn'],

                //'id',
                //'username',
                //'auth_key',
                //'password_hash',
                //'password_reset_token',
                // 'email:email',
                // 'created_at',
                // 'roll_id',
                'firstname',
                'lastname',
                'father_name',
                // 'dob',
                'address',
                'phone',
                'mobile',
                // 'update_date',
                // 'profile_img',

                ['class' => 'yii\grid\ActionColumn'],
            ],
        ]); ?>
        <?php Pjax::end(); ?>
    </div>
