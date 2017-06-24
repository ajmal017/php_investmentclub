<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>

<div id="banner">
<img src="<?= base_url(); ?>assets/frontend/images/contact-us-banner.jpg">
</div>

<div class="contact-sec">
      <div class="container">
        <h3>CONTACT INFO </h3>
        <div class="text">
        	<p class="email">E-mail : <a href="mailto:" class="hvr-underline-from-center">demo@gmail.com</a></p>
          	<p class="phone">Phone Number : <a href="tel:" class="hvr-underline-from-center">9970236208</a></p>
          	<p class="loction"><span>Address :</span> <a href="#" class="hvr-underline-from-center">107, Vardhman Shopping Center, Above Tungareshwar Sweets, Opp.Vasai Railway Station,Vasai West – 401208</a></p>
        </div>
      </div>
    </div>

<div class="form-sec">
<div class="container">
<h3>GET IN TOUCH</h3>
<form action="" method="get">
<ul class="reset">
<li><input type="text" value="" placeholder="Name" ng-model="contact_name" class="name"></li>
<li><input type="text" placeholder="Email" ng-model="contact_email" class="name" ></li>
<li><input type="text" placeholder="Mobile Number" ng-model="contact_mobile" class="name"></li>
<li><textarea cols="" rows="" placeholder="Inquiry" class="textarea" ng-model="contact_enquiry"></textarea></li>
<li><input name="Submit" type="button" class="btn" ng-click="save_contact()"></li>
</ul>
<div class="clear"></div>
</form>

</div>
</div>
<?php $this->view('frontend/includes/footer'); ?>
