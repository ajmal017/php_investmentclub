<div id="banner">
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