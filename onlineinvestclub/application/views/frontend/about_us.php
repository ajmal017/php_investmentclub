<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<div id="wrapper">
  <?php $this->view('frontend/includes/header'); ?>
  <?php /*?> <?php $this->view('frontend/banner'); ?><?php */?>
  	<div class="example-animation">
    <div data-lazy-background="<?= imagePath('assets/frontend/images/about-us.jpg','',1286,193); ?>">
      <h3 data-pos="['27%', '110%', '27%', '40%']" data-duration="1500" data-effect="move">About Us</h3>
    </div>
  </div>
<div class="textsec">
  <div class="container about-us" >
    <div class="aboutus"> <img src="<?= base_url(); ?>uploads/profile/person.png">
      <h2>Amit Jain (The Founder Of Online Trading Institute)</h2>
      <p>Mr.Amit Jain is The Pioneer Of Trading Education such as Share Trading, Future And Option Etc... Mr. Jain has Managed to collect Funds By Diversifying It. He had done MBA in (Finance). He can change people mind set by ensuring them Success in their lives by having Communication With Positive Thinking Etc. He gives practical knowledge along with teaching lessons about trade. Option Writing Is Their Passion. He Has Done More Than 10000+ Trade From Last 10 Years. Now He Helps People To Grow Their Money By Different Means. He Is One Of The Top Believer In Passive Income System.</p>
    </div>
    <div> <img src="<?= base_url(); ?>uploads/profile/person.png">
      <h2>Sumit Jain (Chief of operation & client relations)</h2>
      <p> Mr.Sumit Jain is the backbone of online trading institute taking care of operations and ensuring that we are compliant to rules and regulations. We take pride, the way we support our clients and Sumit is responsible for this with his never ending flow of energy. He is the man behind our support initiatives that helped us stay ahead of the game.</p>
    </div>
  </div>
  <div class="about_us">
    <div class="container">
      <ul class="reset">
        <li> <img src="<?= base_url(); ?>assets/frontend/images/mission.png">
          <h4>mission</h4>
          <p>Create Financial Freedom Globally by Providing Financial Education</p>
        </li>
        <li><img src="<?= base_url(); ?>assets/frontend/images/vision.png">
          <h4>value</h4>
          <p>We Believe Transparency, Integrity and Trust.</p>
        </li>
        <li><img src="<?= base_url(); ?>assets/frontend/images/work.png">
          <h4>Goal</h4>
          <p>Provide Passive Income to Maximum People</p>
        </li>
      </ul>
      <div class="clear"></div>
    </div>
  </div>
</div>
<?php $this->view('frontend/includes/footer'); ?>