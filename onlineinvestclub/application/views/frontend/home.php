<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
  <?php /*?><?php $this->view('frontend/banner'); ?><?php */?>
  <div class="example-animation">
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-1.jpg">
      <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
      <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  </div>
    </div>
     <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-2.jpg">
       <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
      <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  </div>
    </div>
  <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-3.jpg">
      <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
      <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  </div>
    </div>
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-4.jpg">
      <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
      <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  </div>
    </div>
     </div>
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
            <?= $row['package_amount']; ?>
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
              <input name="User name" type="text" value="" placeholder="User Name" class="name">
            </li>
            <li>
              <input name="email" type="text" value="" placeholder="Email" class="name" >
            </li>
            <li>
              <input name="number" type="text" value="" placeholder="Number" class="name">
            </li>
            <li>
              <textarea name="inquiry" cols="" rows="" placeholder="Inquiry" class="textarea"></textarea>
            </li>
            <li>
              <input name="Submit" type="submit" class="btn">
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
<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>
</body></html>