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
            <div class="img-sec lf"> <img src="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>assets/frontend/images/msi/bikrant.jpg&w=280&h=260&q=99" /> </div>
            <div class="info-sec">
              <h3>BIKRANT DUTT ( PROFESSOR CUM TRADER)</h3>
              <p>Till yet good experience, good profit, thanks to Amit sir. Option Mastery must do everyone, in option mastery till yet 100% profit, no loss.</br>Now Mr. Bikrant is professional trader in option writing.</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>assets/frontend/images/msi/rajeshcivil.jpg&w=280&h=260&q=99" /> </div>
            <div class="info-sec">
              <h3>RAJESH MISHRA (CIVIL ENGINEER)</h3>
              <p>Good experience, I have learned from zero level, getting personal touch from sir. Got something new compare to any other things. Some outside people avoid to share knowledge but here I got all knowledge, I cannot compare it. Now it depends upon us how much we can  learn and earn.As sir said about observation, its  matter a lot here. If we follow this no person can be left behind.</br>Now Mr. Rajesh Mishra is professional trader in aluminum (commodity)</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>assets/frontend/images/msi/milind.png&w=280&h=260&q=99" /> </div>
            <div class="info-sec">
              <h3>MILIND RAUT (IT ENGINEER)</h3>
              <p>My confidence level boost up from how to do analysis in option writing with different parameters. I think it’s good as sir said average 5 to 10 percent return per month but it’s possible to earn more. Now we know how we can do successfully work in option.</br>Now he is option trader.</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>assets/frontend/images/msi/samita.jpg&w=280&h=260&q=99" /> </div>
            <div class="info-sec">
              <h3>SAMITA RANE (HOUSEWIFE AND INSURANCE AGENT)</h3>
              <p>My name is Samita Rane. I like two things. Low risk and no need of more time,  thanks sir.
              </br>
              If you have exact knowledge of stock analysis, we can earn good money from stock trading.
              </br>Now she is a stock trader.
              </p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>assets/frontend/images/msi/amit singh.jpg&w=280&h=260&q=99" /> </div>
            <div class="info-sec">
              <h3>AMIT SINGH (BMS-STUDENT)</h3>
              <p>Online trading institute has been essential in providing me the start that i needed in my trading career. I got the support and guidance from Amit sir that everyone needed to overcome the initial fear of losing money in financial markets.  Amit sir could be your edge in the financial market when it comes to mentorship and experience.</p>
              <div class="clear"></div>
            </div>
          </div>
          <div class="attorny-1">
            <div class="img-sec lf"> <img src="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>assets/frontend/images/msi/mehul.png&w=280&h=260&q=99" /> </div>
            <div class="info-sec">
              <h3>MEHUL</h3>
              <p>Hello all, after earnins technical chart trading I am able to earn 1% profit on capital average everyday. Thanks to Sir.</br>Crude Oil Trader</p>
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