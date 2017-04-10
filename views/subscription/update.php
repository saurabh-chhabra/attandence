<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\subscription */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Subscription',
]) . $model->subscription_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Subscriptions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subscription_id, 'url' => ['view', 'id' => $model->subscription_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="subscription-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
