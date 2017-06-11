<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>
  <div id="banner"> <img src="<?= base_url(); ?>assets/frontend/images/legal-bnr.jpg"></div>
  <div class="clear"></div>

<div class="textsec">
    <div class="container">
        <h1>COMING SOON</h1>
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
</body>
</html>