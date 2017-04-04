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
    <li class="active">Manage the user</li>
</ol>
<section class="widget">
    <header>
        <h4>Manage <span class="fw-semi-bold">Manage the user Details</span></h4>
        <div class="widget-controls">
            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </header>
    <div class="widget-body">
        <p>
           Update Salary, Designation, Delete the users.
        </p>
        <div class="mt">


            <table id="example" class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="hidden-xs">Designation</th>
                    <th class="hidden-xs">Salary</th>
                    <th class="no-sort">Update</th>
                    <th class="no-sort">Delete</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="fw-semi-bold">Algerd</span></td>
                    <td><span class="fw-semi-bold">Employee</span></td>
                    <td><span class="fw-semi-bold">2500</span></td>

                    <td>
                        <button class="btn btn-primary width-100 mb-xs" role="button">
                            Primary
                        </button>
                    </td>
                    <td>
                        <button class="btn btn-danger width-100 mb-xs" data-toggle="modal" data-target="#myModal18">
                            Danger
                        </button>
                        <div class="modal fade" id="myModal18" tabindex="-1" role="dialog" aria-labelledby="myModalLabel18" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title text-align-center fw-bold mt" id="myModalLabel18">One more step</h4>
                                        <p class="text-align-center fs-mini text-muted mt-sm">
                                            We need a bit of your detailed information to proceed. US ticketing system requires
                                            us to process and check your personal infromation before we can go.
                                        </p>
                                    </div>
                                    <div class="modal-body bg-gray-lighter">
                                        <form>
                                            <div class="row">
                                                <div class="col-md-8">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Middle Name">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Address">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="City">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Country">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <input type="text" class="form-control input-no-border"
                                                               placeholder="Zip">
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-gray" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-success">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </td>
                </tr>


                </tbody>
            </table>

        </div>
    </div>
</section>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>