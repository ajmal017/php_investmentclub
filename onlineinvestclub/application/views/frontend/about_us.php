<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<div id="wrapper">
<?php $this->view('frontend/includes/header'); ?>

<div id="banner"> <img src="<?= base_url(); ?>assets/frontend/images/about_us-bnr.jpg"></div>
</div>
<div class="textsec">
  <div class="container about-us">
    <h1>About Us</h1>
    <div>
        <img src="http://localhost/projects/php_investmentclub/onlineinvestclub/uploads/profile/person.png">
        <h2>Amit Jain (The Founder Of Online Trading Institute)</h2>
        <p>Mr. Amit Jain is The Pioneer Of Trading Education In Like Share Trading, Future And Option Etc. Mr. Jain Is Managed Fund By Diversify It. He Done MBA (Finance). He Helps People To Change Their Belief And Thought Pattern With More Success In Their Live Through Better Communication With Positive Thinking Etc.
He Not Only Teach How To Trade But Do Practical Also. Option Writing Is Their Passion.
He Has Done More Than 10000+ Trade From Last 10 Years.
Now He Helps People To Grow Their Money By Different Means. He Is One Of The Top Believer In Passive Income System.</p>
    </div>

    <div>
        <img src="http://localhost/projects/php_investmentclub/onlineinvestclub/uploads/profile/person.png">
        <h2>Sumit Jain (Chief of operation & client relations)</h2>
        <p> Sumit is the backbone of online trading institute taking care of operations and ensuring that we are compliant to rules and regulations. We take pride in the way we support our clients and Sumit is responsible for this with his never ending flow of energy. He is the man behind many of our support initiatives that helped us stay ahead of the game.</p>
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
