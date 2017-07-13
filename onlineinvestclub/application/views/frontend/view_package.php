<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
   <div class="example-animation">
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/inner-bnr.jpg">
      <h3 data-pos="['27%', '110%', '27%', '40%']" data-duration="1500" data-effect="move">Package</h3>
    </div>
  </div>
  <div class="clear"></div>
  <div class="textsec">
    <div class="container bank-details bank_details">
      <div>
        <h2>Package Details</h2>
        <ul class="reset">
          <li>Bank Name : <span>Kotak Bank</span></li>
          <li>Branch Name : <span>Manickpur Branch</span></li>
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