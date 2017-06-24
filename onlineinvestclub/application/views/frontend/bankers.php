<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
   <div class="example-animation">
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/inner-bnr.jpg">
      <h3 data-pos="['27%', '110%', '27%', '40%']" data-duration="1500" data-effect="move">Bankers</h3>
    </div>
  </div>
  <div class="clear"></div>
  <div class="textsec">
    <div class="container bank-details bank_details">
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