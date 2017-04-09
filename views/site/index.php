<?php
/* @var $this yii\web\View */
$this->title = 'Attandence';
$baseUrl = Yii::$app->request->baseUrl ;
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


        <div class="login-buttons">
            <?php
            if(Yii::$app->user->isGuest) { ?>
            <a href="<?= $baseUrl; ?>/login" class="btn btn-info btn-block btn-lg">Please Login</a>
            <?php } else { ?>
            <a href="<?= $baseUrl; ?>/dashboard" class="btn btn-info btn-block btn-lg">Dashboard</a>
            <?php } ?>

        </div>




    </div>
    <!-- end login-content -->
</div>
<script>
    (function () {
        function checkTime(i) {
            return (i < 10) ? "0" + i : i;
        }

        function startTime() {
            var today = new Date(),
                h = checkTime(today.getHours()),
                m = checkTime(today.getMinutes()),
                s = checkTime(today.getSeconds());
            document.getElementById('time').innerHTML = h + ":" + m + ":" + s;
            t = setTimeout(function () {
                startTime()
            }, 500);
        }
        startTime();
    })();
</script>