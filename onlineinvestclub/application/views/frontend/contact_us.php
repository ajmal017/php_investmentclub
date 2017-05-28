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
          	<p class="email">Address : <a href="#" class="hvr-underline-from-center">107, Vardhman Shopping Center, Above Tungareshwar Sweets, Opp.Vasai Railway Station,Vasai West – 401208</a></p>
        </div>
      </div>
    </div>

<div class="form-sec">
<div class="container">
<h3>GET IN TOUCH</h3>
<form action="" method="get">
<ul class="reset">
<li><input name="User name" type="text" value="" placeholder="User Name" class="name"></li>
<li><input name="email" type="text" value="" placeholder="Email" class="name" ></li>
<li><input name="number" type="text" value="" placeholder="Number" class="name"></li>
<li><textarea name="inquiry" cols="" rows="" placeholder="Inquiry" class="textarea"></textarea></li>
<li><input name="Submit" type="submit" class="btn"></li>
</ul>
<div class="clear"></div>
</form>

</div>
</div>
<?php $this->view('frontend/includes/footer'); ?>
