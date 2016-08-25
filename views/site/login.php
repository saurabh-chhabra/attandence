<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Attandence Login';

?>
<main id="content" class="widget-login-container" role="main">
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">
            <section class="widget widget-login animated fadeInUp">
                <header>
                    <h3>Login to your Dashboard</h3>
                </header>
                <div class="widget-body">
                    <?php $form = ActiveForm::begin([
                            'id' => 'login-form',
                            'options' => ['class' => 'form-horizontal mt-lg'],
                            'fieldConfig' => [
                                'template' => "{label}<div class=\"col-lg-9\">{input}</div>\n<div class=\"col-lg-offset-3 col-lg-9\">{error}</div>",
                                'labelOptions' => ['class' => 'col-lg-3 control-label'],
                            ],
                        ]); ?>

                        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                        <?= $form->field($model, 'password')->passwordInput() ?>

                        <?= $form->field($model, 'rememberMe')->checkbox([
                            'template' => "<div class=\"col-lg-offset-1 col-lg-9\">{input} {label}</div>\n<div class=\"col-lg-offset-3  col-lg-9\">{error}</div>",
                        ]) ?>

                        <div class="form-group">
                            <div class="col-lg-offset-1 col-lg-11">
                                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                            </div>
                        </div>

                        <?php ActiveForm::end(); ?>
                </div>
            </section>
        </div>
    </div>
</main>


