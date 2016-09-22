<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = $name;
?>

<main id="content" class="error-container" role="main">
    <div class="row">
        <div class="col-lg-4 col-sm-6 col-xs-10 col-lg-offset-4 col-sm-offset-3 col-xs-offset-1">
            <div class="error-container">
                <h2 ><?= Html::encode($this->title) ?></h2>
                <p class="error-info">
                    <?= nl2br(Html::encode($message)) ?>
                </p>
                <p class="error-help mb">
                    The above error occurred while the Web server was processing your request.
                </p>
                <p class="error-help mb">
                    Please contact us if you think this is a server error. Thank you.
                </p>

            </div>
        </div>
    </div>
</main>

<footer class="page-footer">
    2016 &copy; Farekit.
</footer>