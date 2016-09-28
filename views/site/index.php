<?php
/* @var $this yii\web\View */
$this->title = 'Attandence';
$baseUrl = Yii::$app->request->baseUrl ;
?>
<?php
    if(Yii::$app->user->isGuest) { ?>
<div class="col-md-6 col-md-offset-3">
    <div class="row" style="margin-top: 50%;">
        <div class="col-sm-6 col-md-offset-3">

            <section class="widget widget-sm bg-primary">
                <div class="widget-body">
                    <p class="mb-xs"><i class="fa fa-clock-o fa-3x opacity-50"></i></p>
                    <p class="text-light mb"><time id="time"></time></p>
                    <h3>
                     <span class="fw-semi-bold">&nbsp;&nbsp;Pease Login <a href="<?= $baseUrl; ?>/login"> <i class="fa fa-arrow-circle-o-right fa-lg "></i></a></span>
                    </h3>
                </div>
            </section>
        </div>

    </div>
</div>
<?php } else { ?>
<div class="col-md-6 col-md-offset-3">
    <div class="row" style="margin-top: 50%;">
        <div class="col-sm-6 col-md-offset-3">

            <section class="widget widget-sm bg-primary">
                <div class="widget-body">
                    <p class="mb-xs"><i class="fa fa-clock-o fa-3x opacity-50"></i></p>
                    <p class="text-light mb"><time id="time"></time></p>
                    <h3>
                        <span class="fw-semi-bold">&nbsp;&nbsp;Dashboard <a href="<?= $baseUrl; ?>/site/dashboard"> <i class="fa fa-arrow-circle-o-right fa-lg "></i></a></span>
                    </h3>
                </div>
            </section>
        </div>
    </div>
</div>
<?php } ?>
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