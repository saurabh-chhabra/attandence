<?php
/**
 * Created by PhpStorm.
 * User: akhilesh
 * Date: 3/10/16
 * Time: 12:35 PM
 */
$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
$baseUrl1 = Yii::$app->request->baseUrl;
?>
<ol class="breadcrumb">
    <li>YOU ARE HERE</li>
    <li class="active">Create New User</li>
</ol>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
    <?php if (Yii::$app->session->getFlash('success')) {
    ?>
    <div class="alert alert-success alert-sm">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fw-semi-bold">Success:</span> <?= Yii::$app->session->getFlash('success') ?>.
    </div>
    <?php } ?>
    <?php if (Yii::$app->session->getFlash('warning')) {
    ?>
    <div class="alert alert-warning alert-sm">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fw-semi-bold">Warning:</span> <?= Yii::$app->session->getFlash('warning') ?>.
    </div>
    <?php } ?>
    <?php if (Yii::$app->session->getFlash('warning')) {
    ?>
    <div class="alert alert-danger alert-sm">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <span class="fw-semi-bold">Danger:</span>  <?= Yii::$app->session->getFlash('unsuccess') ?>.
        <a class="btn btn-default btn-xs pull-right mr" href="#">Ignore</a>
        <a class="btn btn-danger btn-xs pull-right mr-xs" href="#">Take this action</a>
    </div>
    <?php } ?>

        <section class="widget">
            <header>
                <h5>
                    Inputs
                </h5>
                <div class="widget-controls">
                    <a href="#"><i class="glyphicon glyphicon-cog"></i></a>
                    <a href="#"><i class="fa fa-refresh"></i></a>
                    <a href="#" data-widgster="close"><i class="glyphicon glyphicon-remove"></i></a>
                </div>
            </header>
            <div class="widget-body">
                <form class="form-horizontal" role="form" method="post" id="userRegistration" action="<?= $baseUrl1?>/dashboard/create">
                    <fieldset>
                        <legend><strong>Please</strong> fill the new user Details</legend>
                        <input type="hidden" value="bTUyUFVrbVElX2MxCjM1PBVWcCA4DAoaIV57KA8CDCcPVFoZHAgdEA==" name="_csrf">
                        <input type="hidden" value="2" name="roll_id">
                        <div class="form-group">
                            <label for="normal-field" class="col-sm-4 control-label">First Name</label>
                            <div class="col-sm-7">
                                <input id="normal-field" class="form-control" placeholder="Enter the first name" type="text" name="firstName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="normal-field" class="col-sm-4 control-label">Last Name</label>
                            <div class="col-sm-7">
                                <input id="normal-field" class="form-control" placeholder="Enter the last name" type="text" name="lastName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="normal-field" class="col-sm-4 control-label">Username</label>
                            <div class="col-sm-7">
                                <input id="normal-field" class="form-control" placeholder="Enter the name" type="text" name="userName">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="normal-field" class="col-sm-4 control-label">Email</label>
                            <div class="col-sm-7">
                                <input id="normal-field" class="form-control" placeholder="Enter the Email" type="email" name="email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="normal-field" class="col-sm-4 control-label">Password</label>
                            <div class="col-sm-7">
                                <input id="normal-field" class="form-control" placeholder="Enter the Password" type="password" name="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="normal-field" class="col-sm-4 control-label">Mobile</label>
                            <div class="col-sm-7">
                                <input id="normal-field" class="form-control" placeholder="Enter the Mobile Number" type="number" name="mobile">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-actions">
                        <div class="row">
                            <div class="col-sm-offset-4 col-sm-7">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="button" class="btn btn-inverse">Cancel</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </div>

</div>
