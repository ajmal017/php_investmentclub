<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>
  <div id="banner">
    <div class="bnr-sec">
      <ul class="bxslider">
        <li><img src="<?= base_url(); ?>assets/frontend/images/PAYMENTBANK-1110x550.jpg" style="height:450px;">
          <div class="caption-sec">
            <h3>what can we do for you? </h3>
            <p>There Is Life After Debt. Let Us Help You Get There.</p>
            <!--<a href="#">Learn More</a>-->
            <div class="clear"></div>
          </div>
        </li>
        <li><img src="<?= base_url(); ?>assets/frontend/images/Banner-finance.jpg" style="height:450px;">
          <div class="caption-sec">
            <h3>Lorem Ipsum is simpl</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus</p>
            <!--<a href="#">Learn More</a>-->
            <div class="clear"></div>
          </div>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
  <div class="content">
    <div class="text-sec">
      <div class="container">
        <h3>ONLINE INVEST CLUB MEMBERS</h3>
        <img src="<?= base_url(); ?>assets/frontend/images/member.jpg">
      </div>
    </div>
    <div class="join-us">
    <div class="container">
    <a href="#">Join Us</a>
    </div>
    </div>
    <div class="our-products">
    <div class="container">
    <h3>Our Products</h3>
    <p>Explore our e-learning opportunities</p>
    <ul class="reset">
    <li><a href="#"><img src="<?= base_url(); ?>assets/frontend/images/package4.jpg">
    <p>First time</p>
    <span>Free</span></a>
    </li>
    <li><a href="#"><img src="<?= base_url(); ?>assets/frontend/images/package3.jpg">
    <p>Platinum package</p>
    <span>5,000 RS</span></a>
    </li>
    <li>
    <a href="#"><img src="<?= base_url(); ?>assets/frontend/images/package2.jpg">
    <p>silver package</p>
    <span>15,000 RS</span></a>
    </li>
    <li>
    <a href="#"><img src="<?= base_url(); ?>assets/frontend/images/package1.jpg">
    <p>gold package</p>
    <span>30,000 RS</span></a>
    </li>
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