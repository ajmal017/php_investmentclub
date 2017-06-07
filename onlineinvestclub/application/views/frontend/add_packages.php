<?php $this->view('frontend/includes/header1'); ?>
<script src="<?php echo base_url(); ?>assets/frontend/js/libs/packages.js"></script>

<div class="middle-content">
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Package Name</th>
        <th>Amount</th>
        <th>Quantity</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php $package_list=getPackages(0,array('package_status'=>'active')); ?>
      <?php foreach ($package_list as $row ) {  ?>
      <tr id="package-id-<?php echo $row['package_id']; ?>">
        <td class="package_name"><?= $row['package_name'];?></td>
        <td><?= $row['package_amount'];?></td>
        <td><input type="text" class="package_quantity form-control"/></td>
        <td><button type="button" class="btn btn-primary addPackage" ng-click="add_package(<?php echo $row['package_id']; ?>)">BUY</button></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="clear"></div>
</div>
</div>
</body></html>