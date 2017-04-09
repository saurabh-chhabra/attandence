<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Attandence Login';

?>
<div class="right-content">
    <!-- begin login-header -->
    <div class="login-header">
        <div class="brand">
            <span class="logo"></span> Global Tech

        </div>
        <div class="icon">
            <i class="material-icons">lock</i>
        </div>
    </div>
    <div class="login-content">
        <?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'options' => ['class' => 'margin-bottom-0'],
            'fieldConfig' => [
                'template' => "<div class=\"form-group m-b-15\">{input}</div>\n<div class=\"col-lg-offset-3 col-lg-9\">{error}</div>"

            ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true,'class'=>"form-control input-lg input-lg"]) ?>

        <?= $form->field($model, 'password')->passwordInput(['class'=>"form-control input-lg input-lg"]) ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"checkbox m-b-30\"><label>{input} Remember Me </label></div>\n<div class=\"col-lg-offset-3  col-lg-9\">{error}</div>",
        ]) ?>

        <div class="login-buttons">
            <?= Html::submitButton('Sign me in', ['class' => 'btn btn-info btn-block btn-lg', 'name' => 'login-button']) ?>
        </div>

        <?php ActiveForm::end(); ?>


    </div>
    <!-- end login-content -->
</div>