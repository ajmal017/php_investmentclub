<?php /*<div id="banner">
  <div class="bnr-sec">
    <ul class="bxslider">
      <?php 
      $slider = array("learn and earn.jpg","earn-learn4.jpg","The-Six-Figure-Mentors-Learn-Earn.png","share-graphic.jpg","AAEAAQAAAAAAAAfGAAAAJDVkN2Y1NmU5LWJhZTktNGYyNy04ZDkyLTdiZjhlOWNkMTc1NA.jpg","1-21.jpg");
      foreach($slider as $row) { ?>
      <li><img src="<?= base_url(); ?>assets/frontend/images/<?= $row; ?>" style="width:100%; height:350px">
        <div class="caption-sec">
          <!--<h3>what can we do for you? </h3>
          <p>There Is Life After Debt. Let Us Help You Get There.</p>
          <a href="#">Learn More</a>-->
          <div class="clear"></div>
        </div>
      </li>
      <?php } ?>
    </ul>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
*/ ?>
<div class="example-animation">
  <?php 
      $slider = array("amitjain.jpg","amitjain1.jpg","amitjain2.jpg","amitjain3.jpg");
      foreach($slider as $row) { ?>
      <div data-lazy-background="<?= base_url(); ?>timthumb.php?src=<?= base_url(); ?>/assets/frontend/images/msi/<?= $row; ?>&h=473&q=100">
          <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
          <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  
          </div>
      </div>
  <?php } ?>    
    
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-2.jpg">
        <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
        <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  
        </div>
    </div>
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-3.jpg">
        <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
        <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  
        </div>
    </div>
    <div data-lazy-background="<?= base_url(); ?>assets/frontend/images/bnr-4.jpg">
        <h3 data-pos="['27%', '110%', '27%', '5%']" data-duration="700" data-effect="move"> Well Come to my web site</h3>
        <div data-pos="['46%', '-40%', '46%', '5%']" data-duration="700" data-effect="move" class="bnr-btn">Lorem Ipsum is simply dummy text  
        </div>
    </div>
</div>
