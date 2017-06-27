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
      <p class="email">E-mail : <a href="mailto:" class="hvr-underline-from-center">info@onlinetradinginstitute.in</a></p>
      <p class="phone">Phone Number : <a href="tel:" class="hvr-underline-from-center">9970236208</a></p>
      <p class="loction"><span>Address :</span> <a href="#" class="hvr-underline-from-center">107, Vardhman Shopping Center, Above Tungareshwar Sweets, Opp.Vasai Railway Station,Vasai West – 401208</a></p>
    </div>
  </div>

</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.9177803713819!2d72.82969848806704!3d19.38338799917802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2b9873a4c4c4e837!2sVardhaman+Shopping+Centre!5e0!3m2!1sen!2sin!4v1498337255418" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
<div class="form-sec">
  <div class="container">
    <h3>GET IN TOUCH</h3>
    <form action="" method="get">
      <ul class="reset">
        <li>
          <input type="text" placeholder="Name" class="name" ng-model="contact_name">
        </li>
        <li>
          <input type="text" placeholder="Email" class="name" ng-model="contact_email">
        </li>
        <li>
          <input type="text" placeholder="Mobile" class="name" ng-model="contact_mobile">
        </li>
        <li>
          <textarea cols="" rows="" placeholder="Enquiry" class="textarea" ng-model="contact_enquiry"></textarea>
        </li>
        <li>
          <input name="Submit" type="button" class="btn" value="Submit" ng-click="save_contact()">
        </li>
      </ul>
      <div class="clear"></div>
    </form>
  </div>
</div>
<?php $this->view('frontend/includes/footer'); ?>
