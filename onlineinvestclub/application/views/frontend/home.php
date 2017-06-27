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
      <div class="container"> <a href="<?= site_url(); ?>/register">Join Us</a> </div>
    </div>
    <div class="video-sec">
      <div class="container">
        <h3>Watch our Video</h3>
        <ul class="reset">
          <li>
            <h4>Practice Teaching Video Clip</h4>
            <iframe src="https://www.youtube.com/embed/V3vXvR7BYvc" frameborder="0" allowfullscreen></iframe>
          </li>
          <li>
            <h4>Practice Teaching Video Clip</h4>
            <iframe src="https://www.youtube.com/embed/V3vXvR7BYvc" frameborder="0" allowfullscreen></iframe>
          </li>
          <li>
            <h4>Practice Teaching Video Clip</h4>
            <iframe src="https://www.youtube.com/embed/V3vXvR7BYvc" frameborder="0" allowfullscreen></iframe>
          </li>
          <li>
            <h4>Practice Teaching Video Clip</h4>
            <iframe src="https://www.youtube.com/embed/V3vXvR7BYvc" frameborder="0" allowfullscreen></iframe>
          </li>
        </ul>
      </div>
    </div>
    <div class="our-products">
      <div class="container">
        <h3>Our Products</h3>
        <ul class="reset">
          <?php $package_list = getPackages(); ?>
          <?php foreach($package_list as $row) { ?>
          <li>
            <h4>
              <?= $row['package_name']; ?>
            </h4>
            <img src="<?= base_url(); ?>uploads/packages/<?= $row['package_image']; ?>" style="width:138px;height:127px;"> <span>
            <?= $row['package_desc']; ?>
            </span> <a href="#" class="hvr-rectangle-out">Read More</a> </li>
          <?php } ?>
        </ul>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div class="bg-sec">
    <div class="form_sec">
      <div class="container">
        <h3>GET IN TOUCH</h3>
        <form action="" method="get">
          <ul class="reset">
            <li>
              <input type="text" value="" placeholder="Name" class="name" ng-model="contact_name"/>
            </li>
            <li>
              <input type="text" value="" placeholder="Email" class="name" ng-model="contact_email"/>
            </li>
            <li>
              <input type="text" value="" placeholder="Mobile" class="name" ng-model="contact_mobile"/>
            </li>
            <li>
              <textarea cols="" rows="" placeholder="Enquiry" class="textarea" ng-model="contact_enquiry"></textarea>
            </li>
            <li>
              <input name="Submit" type="button" class="btn" ng-click="save_contact()" value="Submit"/>
            </li>
          </ul>
          <div class="clear"></div>
        </form>
      </div>
    </div>
  </div>
  <?php $this->view('frontend/includes/footer'); ?>
</div>
</div>
</body></html>