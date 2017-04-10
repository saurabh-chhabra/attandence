<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = 'Not Allowed';
?>

<div class="error">
    <div class="error-code m-b-10 text-yellow"><?= Html::encode($this->title) ?> <i class="material-icons">warning</i></div>
    <div class="error-content bg-grey-700">
        <div class="error-message"><?= nl2br(Html::encode($message)) ?></div>
        <div class="error-desc m-b-20">
            The above error occurred while the Web server was processing your request. <br />
            Please contact us if you think this is a server error. Thank you.
        </div>
        <div>
            <a href="javascript;;" class="btn btn-inverse text-yellow"><i class="material-icons pull-left f-s-18 m-t-1 m-r-5">arrow_back</i> Back to Home Page</a>
        </div>
    </div>
</div>