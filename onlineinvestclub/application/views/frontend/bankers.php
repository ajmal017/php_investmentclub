<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
  <div id="banner"> <img src="<?= base_url(); ?>assets/frontend/images/banker-img.jpg"></div>
  <div class="clear"></div>
  <div class="textsec">
  <div class="container bank-details">
    <div>
      <h2>Bank Details</h2>
      <ul class="reset">
        <li>Bank Name : <span>SBI</span></li>
        <li>Branch Name : <span>Vasai</span></li>
        <li>Account Number : <span>0987654321098</span></li>
        <li>IFSC : <span>7890</span></li>
      </ul>
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