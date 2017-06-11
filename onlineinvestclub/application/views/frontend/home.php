<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>
  <?php $this->view('frontend/banner'); ?>
  <div class="clear"></div>
  <div class="content">
    <?php /*?>
    <div class="text-sec">
      <div class="container">
        <h3>ONLINE INVEST CLUB MEMBERS</h3>
        <img src="<?= base_url(); ?>assets/frontend/images/member.jpg">
      </div>
    </div><?php */ ?>
    <div class="join-us">
    <div class="container">
    <a href="<?= site_url(); ?>/register">Join Us</a>
    </div>
    </div>
    <div class="our-products">
    <div class="container">
    <h3>Our Products</h3>
    <p>Explore our e-learning opportunities</p>
    <ul class="reset">
      <?php $package_list = getPackages(); ?>
      <?php 
      foreach($package_list as $row)
      { ?>
        
        <li>
            <a href="#">
                <img src="<?= base_url(); ?>uploads/packages/<?= $row['package_image']; ?>" style="width:138px;height:127px;">
                <p><?= $row['package_name']; ?></p>
                <span><?= $row['package_amount']; ?></span>
            </a>
        </li>
      <?php } ?>
   </ul>
   <div class="clear"></div>
   </div>	
    </div>
    
  </div>
  <?php $this->view('frontend/includes/footer'); ?>
  </div>
</div>
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</body>
</html>