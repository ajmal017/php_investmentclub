<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
  <div class="example-animation">
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/inner-bnr.jpg">
      <h3 data-pos="['27%', '110%', '27%', '40%']" data-duration="1500" data-effect="move">TESTIMONIALS</h3>
    </div>
  </div>
  <div class="clear"></div>
  <div class="textsec">
    <div class="container">
      <div class="attorny-sec">
        <div class="container">
          <div class="attorny-1 first-class">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>assets/frontend/images/attorny-1.jpg" /> </div>
            <div class="info-sec">
              <h3>Abc xyz</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>assets/frontend/images/attorny-2.jpg" /> </div>
            <div class="info-sec">
              <h3>Pqr rst</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>assets/frontend/images/attorny-1.jpg" /> </div>
            <div class="info-sec">
              <h3>Abc xyz</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>assets/frontend/images/attorny-2.jpg" /> </div>
            <div class="info-sec">
              <h3>Pqr rst</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              <div class="clear"></div>
            </div>
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