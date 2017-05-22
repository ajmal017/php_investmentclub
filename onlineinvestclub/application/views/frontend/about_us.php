<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>

<div id="banner"> <img src="<?= base_url(); ?>assets/frontend/images/about_us-bnr.jpg"></div>
</div>
<div class="textsec">
  <div class="container">
    <h1>About Us</h1>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
  </div>
  <div class="about_us">
    <div class="container">
      <ul class="reset">
        <li> <img src="<?= base_url(); ?>assets/frontend/images/mission.png">
          <h4>mission</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
        </li>
        <li><img src="<?= base_url(); ?>assets/frontend/images/vision.png">
          <h4>vision</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
        </li>
        <li><img src="<?= base_url(); ?>assets/frontend/images/work.png">
          <h4>work from home</h4>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer</p>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php $this->view('frontend/includes/footer'); ?>
