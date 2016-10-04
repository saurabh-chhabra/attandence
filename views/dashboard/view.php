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
    <li class="active">View All User</li>
</ol>
<section class="widget">
    <header>
        <h4>Complete <span class="fw-semi-bold">User Details</span></h4>
        <div class="widget-controls">
            <a data-widgster="expand" title="Expand" href="#"><i class="glyphicon glyphicon-chevron-up"></i></a>
            <a data-widgster="collapse" title="Collapse" href="#"><i class="glyphicon glyphicon-chevron-down"></i></a>
            <a data-widgster="close" title="Close" href="#"><i class="glyphicon glyphicon-remove"></i></a>
        </div>
    </header>
    <div class="widget-body">
        <div class="mt">
            <table id="example" class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="no-sort hidden-xs">Username</th>
                    <th class="hidden-xs">Email</th>
                    <th class="hidden-xs">Mobile</th>
                    <th class="hidden-xs">Salary</th>
                    <th class="hidden-xs">Address</th>
                    <th class="no-sort">Status</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><span class="fw-semi-bold">Akhilesh</span></td>
                    <td class="hidden-xs">admin</td>
                    <td class="hidden-xs">emai@email.com</td>
                    <td class="hidden-xs">123456789</td>
                    <td class="hidden-xs">5000</td>
                    <td class="hidden-xs">Vpo matour mohai</td>
                    <td class="hidden-xs">
                        <button class="btn btn-success width-100 mb-xs" role="button">
                            Present
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