<?php $this->view('frontend/includes/header1'); ?>
<script src="<?php echo base_url(); ?>assets/frontend/js/libs/packages.js"></script>

<div class="middle-content">
  <table class="table table-striped packages-table">
    <thead>
      <tr>
        <th>Package Name</th>
        <th>Package Image</th>
        <th>Amount</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $userid = $session_data['logged_in']['userid'];
      $wherein = "package_id NOT IN (select package_id from user_packages WHERE userid ='".$userid."' group by package_id)";
      $package_list=getPackages(0,array('package_status'=>'active'),$wherein); ?>
      <?php 
      if(count($package_list) > 0 ){
          foreach ($package_list as $row ) {  ?>
          <tr id="package-id-<?php echo $row['package_id']; ?>">
            <td class="package_name"><?= $row['package_name'];?></td>
            <td><img src="<?= imagePath($row['package_image'],'packages',100,100); ?>"/></td>
            <td><?= $row['package_amount'];?></td>
            <td><button type="button" class="btn btn-primary addPackage" ng-click="add_package(<?php echo $row['package_id']; ?>)">BUY</button></td>
          </tr>
          <?php 
          }
      }else{ ?>
          <tr><td colspan="4">All Courses already purchased</td></tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<div class="clear"></div>
<?php $this->view('frontend/includes/footer'); ?>

</body></html>