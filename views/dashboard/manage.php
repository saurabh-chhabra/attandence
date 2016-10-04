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
                        <button class="btn btn-danger width-100 mb-xs" role="button">
                            Danger
                        </button>
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