<link rel="stylesheet" href="<?php echo base_url(); ?>assets/admin/assets/plugins/bootstrap-wysihtml5/css/bootstrap-wysihtml5.css">
<script src="<?php echo base_url(); ?>assets/admin/js/libs/notifications.js"></script>
<div class="page-subheading page-subheading-md">
    <ol class="breadcrumb">
        <li class="active"><a href="javascript:;">User Payment Details</a></li>
    </ol>
</div>
<div class="container-fluid-md">
    <div class="panel panel-primary">
        <div class="panel-heading">
            <h4 class="panel-title">User Payment Details</h4>

            <div class="panel-options">
                <a href="#" data-rel="collapse"><i class="fa fa-fw fa-minus"></i></a>
                <a href="#" data-rel="reload"><i class="fa fa-fw fa-refresh"></i></a>
                <a href="#" data-rel="close"><i class="fa fa-fw fa-times"></i></a>
            </div>
        </div>
        <div class="panel-body">
            <table id="table-basic" class="table table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>Total Amount</th>
                        <th>Amount Paid</th>
                        <th>Amount Remaining</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $payment_details=user_payment_details(array()); ?>
                    <?php foreach ($payment_details as $row ) { 
                        ?>
                        <tr >
                            <td><?= $row['username'];?></td>
                            <td><?= $row['Total_Amount'];?></td>
                            <td><?= $row['Paid_Amount'];?></td>
                            <td><?= $row['Remaining_Amount'];?></td>
                            <td>
                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#release_payment" >Release Payment</button>
                                <button type="button" class="btn btn-primary">View Payment Details</button>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
        </div>
    </div>    
</div>
</div>
<div class="modal fade" id="release_payment" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Address Details</h4>
            </div>
                <div class="modal-body" style="overflow:auto;">
                    <div class="col-md-12">
                        <div class="form-group col-md-4">
                            <label>Country : </label>
                            <input type="text" class="form-control" ng-model="user_info.country">
                        </div>
                        <div class="form-group col-md-4">
                            <label>State : </label>
                            <input type="text" class="form-control" ng-model="user_info.state">
                        </div>
                        <div class="form-group col-md-4">
                            <label>City : </label>
                            <input type="text" class="form-control" ng-model="user_info.city">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Address : </label>
                            <input type="text" class="form-control" ng-model="user_info.address">
                        </div>
                        <div class="form-group col-md-4">
                            <label>Pincode : </label>
                            <input type="text" class="form-control" ng-model="user_info.pincode">
                        </div>
                    </div>
                </div>
              <div class="modal-footer">
                {{data}}
                <input type="button" class="btn btn-primary" ng-click="save_address_details()" value="Save"/>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>    
    </div>
</div>
</div>
</div>
    <?php $this->load->view('admin/includes/footer'); ?>    
    </body>
</html>
