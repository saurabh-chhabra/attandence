<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 19/9/16
 * Time: 3:51 PM
 */
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
$baseUrl = Yii::$app->request->baseUrl . "/web";
?>
<div class="row">
    <div class="col-md-3 col-sm-6">
        <section class="widget bg-primary text-white">
            <div class="widget-body clearfix">
                <div class="row">
                    <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class="glyphicon glyphicon-globe"></i>
                                </span>
                    </div>
                    <div class="col-xs-9">
                        <h5 class="no-margin">CURRENT USERS</h5>
                        <p class="h2 no-margin fw-normal">4,332</p>
                    </div>
                </div>
                <div class="col-xs-9">
                    <h5 class="no-margin">PREVIOUS USERS</h5>
                    <p class="h2 no-margin fw-normal">4,332</p>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3 col-sm-6">
        <section class="widget bg-info text-white">
            <div class="widget-body clearfix">
                <div class="row">
                    <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class=" glyphicon glyphicon-user"></i>
                                </span>
                    </div>
                    <div class="col-xs-9">
                        <h5 class="no-margin"> EM. PRESENT TODAY  </h5>
                        <p class="h2 no-margin fw-normal">4,332</p>
                    </div>
                </div>
                <div class="col-xs-9">
                    <h5 class="no-margin">EM. PRESENT TODAY</h5>
                    <p class="h2 no-margin fw-normal">4,332</p>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3 col-sm-6">
        <section class="widget bg-gray text-white">
            <div class="widget-body clearfix">
                <div class="row">
                    <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class=" glyphicon glyphicon-user"></i>
                                </span>
                    </div>
                    <div class="col-xs-9">
                        <h5 class="no-margin">EM. ABSENT TODAY</h5>
                        <p class="h2 no-margin fw-normal">4,332</p>
                    </div>
                </div>
                <div class="col-xs-9">
                    <h5 class="no-margin">EM. ABSENT TODAY</h5>
                    <p class="h2 no-margin fw-normal">4,332</p>
                </div>
            </div>
        </section>
    </div>
    <div class="col-md-3 col-sm-6">
        <section class="widget bg-success text-white">
            <div class="widget-body clearfix">
                <div class="row">
                    <div class="col-xs-3">
                                <span class="widget-icon">
                                    <i class=" glyphicon glyphicon-user"></i>
                                </span>
                    </div>
                    <div class="col-xs-9">
                        <h5 class="no-margin">EM. LEAVES TODAY</h5>
                        <p class="h2 no-margin fw-normal">4,332</p>
                    </div>
                </div>
                <div class="col-xs-9">
                    <h5 class="no-margin">EM. LEAVES TODAY</h5>
                    <p class="h2 no-margin fw-normal">4,332</p>
                </div>
            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <section class="widget">
            <div class="widget-image text-white">
                <img src="<?php echo $baseUrl ?>/img/pictures/18.jpg">
                <h3 class="title">
                    <span class="fw-normal">Sunnyvale</span>, CA
                </h3>
                <div class="info text-align-right">
                    <i class="fa fa-map-marker h1 no-margin mr-xs"></i>
                    <h6 class="no-margin mt-xs">FLORIDA, USA</h6>
                    <p class="fs-sm">9:41 am</p>
                </div>
                <div class="forecast">
                    <div class="row">
                        <div class="col-xs-6 col-sm-4">
                            <div class="row mt-xs">
                                <div class="col-xs-6 no-padding">
                                    <canvas id="clear-day" width="40" height="40"></canvas>
                                    <p class="no-margin fw-normal mt-n-xs">sunny</p>
                                </div>
                                <div class="col-xs-6 no-padding">
                                    <h5 class="fw-semi-bold no-margin">SUNDAY</h5>
                                    <p class="value1 ">29&deg;</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-3 col-sm-2 no-padding">
                            <h6 class="no-margin">TOMMOROW</h6>
                            <canvas class="mt-xs" id="partly-cloudy-day" width="28" height="28"></canvas>
                            <p class="no-margin fw-semi-bold">32&deg;</p>
                        </div>
                        <div class="col-xs-3 col-sm-2 no-padding">
                            <h6 class="no-margin">TUE</h6>
                            <canvas class="mt-xs" id="rain" width="28" height="28"></canvas>
                            <p class="no-margin fw-semi-bold">25&deg;</p>
                        </div>
                        <div class="col-xs-3 col-sm-2 no-padding">
                            <h6 class="no-margin">WED</h6>
                            <canvas class="mt-xs" id="clear-day-3" width="28" height="28"></canvas>
                            <p class="no-margin fw-semi-bold">28&deg;</p>
                        </div>
                        <div class="col-xs-3 col-sm-2 no-padding">
                            <h6 class="no-margin">THU</h6>
                            <canvas class="mt-xs" id="partly-cloudy-day-3" width="28" height="28"></canvas>
                            <p class="no-margin fw-semi-bold">17&deg;</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="col-sm-6">
                <section class="widget no-padding text-align-center">
                    <div class="row no-margin">
                        <div class="col-xs-5 bg-danger btlr bblr">
                            <canvas class="mt" id="clear-day-1" width="62" height="62"></canvas>
                            <h5 class="text-white display-inline-block fw-normal">FRIDAY</h5>
                        </div>
                        <div class="col-xs-7">
                            <p class="value0 text-danger mt-n-xs mr-n-xs">
                                33&deg;
                            </p>
                            <p class="mt-n-sm mb-xs fw-normal fs-sm text-muted">WINDY</p>
                            <div class="row">
                                <div class="col-xs-6 no-padding">
                                    <canvas id="wind-1" width="20" height="20"></canvas>
                                    <div class="display-inline-block">
                                        <p class="value5">4</p>
                                        <p class="fs-sm no-margin mt-n-xs text-muted fw-normal">MPS</p>
                                    </div>
                                </div>
                                <div class="col-xs-6 no-padding">
                                    <canvas id="rain-1" width="20" height="20"></canvas>
                                    <div class="display-inline-block">
                                        <p class="value5">52</p>
                                        <p class="fs-sm no-margin mt-n-xs text-muted fw-normal">MM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            <div class="col-sm-6">
                <section class="widget no-padding text-align-center">
                    <div class="row no-margin">
                        <div class="col-xs-7 bg-success btlr bblr">
                            <p class="value0 text-white mt-sm mr-n-xs mb-n-xs">
                                20&deg;
                            </p>
                            <p class="text-white display-inline-block fw-normal display-inline-block mb">SUNDAY</p>
                        </div>
                        <div class="col-xs-5">
                            <canvas class="mt" id="partly-cloudy-day-1" width="60" height="60"></canvas>
                            <p class="fw-normal fs-sm text-muted">WINDY</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="row">
            <div class="col-sm-6">
                <section class="widget widget-chart-simple widget-sm">
                    <div class="widget-body">
                        <h5 class="mb-xs fw-normal">
                            Nasdaq
                        </h5>
                        <div class="chart-value">
                            355 <span class="fw-semi-bold">USD</span>
                        </div>
                        <p>Last Sale 354.94 USD</p>
                        <div class="chart">
                            <div id="chart-simple"></div>
                        </div>
                    </div>
                </section>
                <section class="widget widget-sm bg-primary">
                    <div class="widget-body">
                        <p class="mb-xs"><i class="fa fa-arrow-circle-up fa-3x opacity-50"></i></p>
                        <p class="text-light mb"><time>10 June</time></p>
                        <h3>
                            Lots of <span class="fw-semi-bold">new</span> amazing possibilities
                        </h3>
                        <p class="fs-mini mt">
                            <span class="fw-semi-bold">214</span> likes
                            &nbsp;
                            <span class="fw-semi-bold">96</span> comments
                        </p>
                    </div>
                </section>
            </div>
            <div class="col-sm-6">
                <section class="widget widget-sm bg-success text-white">
                    <div class="widget-body">
                        <p class="mb-xs"><i class="fa fa-comments fa-2x"></i></p>
                        <h4>
                            Lots of <span class="fw-semi-bold">possibilities</span> to customize your
                            new <span class="fw-semi-bold">admin template</span>
                        </h4>
                        <p class="fs-mini mt-sm">
                            <span class="fw-semi-bold">83</span> likes
                            &nbsp;
                            <span class="fw-semi-bold">96</span> comments
                            &nbsp;
                            <span class="fw-semi-bold">7</span> shares
                        </p>
                        <p class="text-light fs-sm mt-lg"><time>10 June</time></p>
                    </div>
                </section>
                <section class="widget widget-sm">
                    <header>
                        <h5>Server <span class="fw-semi-bold">Overview</span></h5>
                    </header>
                    <div class="widget-body">
                        <div class="clearfix fs-mini">
                            <span class="pull-right no-margin fw-semi-bold">CPU</span>
                            <span class="fs-mini">60% / 37°C / 3.3 Ghz</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar" style="width: 70%;"></div>
                        </div>
                        <div class="clearfix fs-mini mt">
                            <span class="pull-right no-margin fw-semi-bold">Mem</span>
                            <span class="fs-mini">29% / 4GB (16 GB)</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-warning" style="width: 29%;"></div>
                        </div>
                        <div class="clearfix fs-mini mt">
                            <span class="pull-right no-margin fw-semi-bold">LAN</span>
                            <span class="fs-mini">6 Mb/s <i class="fa fa-caret-down"></i> &nbsp; 3 Mb/s <i class="fa fa-caret-up"></i></span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-danger" style="width: 48%;"></div>
                        </div>
                        <div class="clearfix fs-mini mt">
                            <span class="pull-right no-margin fw-semi-bold">Access</span>
                            <span class="fs-mini">17 Mb/s <i class="fa fa-caret-up"></i> &nbsp; (+18%)</span>
                        </div>
                        <div class="progress progress-xs">
                            <div class="progress-bar progress-bar-success" style="width: 64%;"></div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</div>
