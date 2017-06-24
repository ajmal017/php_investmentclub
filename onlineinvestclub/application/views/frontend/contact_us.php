<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>
<div class="example-animation">
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/inner-bnr.jpg">
      <h3 data-pos="['27%', '110%', '27%', '40%']" data-duration="1500" data-effect="move">Contact Us</h3>
    </div>
  </div>
   <div class="clear"></div>
<div class="contact-sec">
  <div class="container">
    <div class="text">
      <p class="email">E-mail : <a href="mailto:" class="hvr-underline-from-center">demo@gmail.com</a></p>
      <p class="phone">Phone Number : <a href="tel:" class="hvr-underline-from-center">9970236208</a></p>
      <p class="loction"><span>Address :</span> <a href="#" class="hvr-underline-from-center">107, Vardhman Shopping Center, Above Tungareshwar Sweets, Opp.Vasai Railway Station,Vasai West – 401208</a></p>
    </div>
<<<<<<< HEAD

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

=======
  </div>
 
>>>>>>> b6962964d41c2b592857694ca1815ecf17ac4838
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.693042179922!2d72.82996411447346!3d19.382439486912855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7aec1944c2ae7%3A0x3f30e944e54a7bdc!2sVasai+Road!5e0!3m2!1sen!2sin!4v1497331651302" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="form-sec">
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
<?php $this->view('frontend/includes/footer'); ?>
