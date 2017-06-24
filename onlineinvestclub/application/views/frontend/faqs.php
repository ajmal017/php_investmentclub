<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
   <div class="example-animation">
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/inner-bnr.jpg">
      <h3 data-pos="['27%', '110%', '27%', '40%']" data-duration="1500" data-effect="move">FAQs</h3>
    </div>
  </div>
  <div class="textsec">
    <div class="container">
      <div class="attorny-sec  first-class">
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