<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
  <div id="banner"> <img src="<?= base_url(); ?>assets/frontend/images/faqs-bnr.jpg"></div>
  <div class="textsec">
    <div class="container">
      <h1>FAQ'S</h1>
      <div class="attorny-sec">
        <div class="container">
          <div class="ques-1">
            <h4><span>Q1.</span> Lorem Ipsum is simply dummy text of the printing ? </h4>
            <p><span>Ans:</span> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</p>
          </div>
          <div class="ques-1">
            <h4><span>Q2.</span> Lorem Ipsum is simply dummy text of the printing ? </h4>
            <p><span>Ans:</span> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</p>
          </div>
          <div class="ques-1">
            <h4><span>Q3.</span> Lorem Ipsum is simply dummy text of the printing ? </h4>
            <p><span>Ans:</span> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</p>
          </div>
          <div class="ques-1">
            <h4><span>Q4.</span> Lorem Ipsum is simply dummy text of the printing ? </h4>
            <p><span>Ans:</span> Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printingLorem Ipsum is simply dummy text of the printing Lorem Ipsum is simply dummy text of the printing</p>
          </div>
          <div class="clear"></div>
        </div>
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