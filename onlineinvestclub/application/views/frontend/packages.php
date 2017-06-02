<?php $this->view('frontend/includes/header1'); ?>
<div class="middle-content">
    <button class="btn btn-primary" style="margin:5px 5px 5px 5px;" onclick="window.location.href='<?php echo site_url(); ?>/packages/add_packages'">Add Package</button>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Package Name</th>
        <th>Package Image</th>
        <th>Amount</th>
        <th>Quantity</th>
        <th>Purchase Date</th>
        <th>Status</th>
        <th>View Course Content</th>
      </tr>
    </thead>
    <tbody>
      <?php $userPackagesList = getUserPackages($session_data['logged_in']['userid']); ?>
      <?php foreach($userPackagesList as $upl){ ?>
      <?php //dump($upl); ?>
      <tr>
        <td><?= $upl['package_name']; ?></td>
        <td><img src="<?= imagePath('packages/'.$upl['package_image']); ?>" style="width:100px;height:100px;"/></td>
        <td><?= $upl['package_amount']; ?></td>
        <td><?= $upl['quantity']; ?></td>
        <td><?= $upl['purchase_date']; ?></td>
        <td><?= $upl['user_package_status']; ?></td>
        <td>
          <?php if($upl['user_package_status'] == 'accepted') { ?>
          <a class="btn btn-primary" href="<?= site_url(); ?>/packages/content?package_id=<?= $upl['package_id']; ?>">View</a></td>
          <?php } ?>
      </tr>
      <?php } ?>
    </tbody>
  </table>     
</div>
   <div class="clear"></div> 
  </div>
  
</div>
</body>
</html>
