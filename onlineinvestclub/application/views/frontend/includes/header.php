<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online Invest Club</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="<?= base_url(); ?>assets/frontend/css/global.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/frontend/css/print.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<link href="<?= base_url(); ?>assets/frontend/css/responsive.css" rel="stylesheet" type="text/css">
<link href="<?= base_url(); ?>assets/frontend/css/jquery.bxslider.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="<?= base_url(); ?>assets/frontend/css/style.css"> 

<script src="<?= base_url(); ?>assets/frontend/js/jquery-1.11.0.min.js"></script>
<script src="<?= base_url(); ?>assets/frontend/js/modernizr.js"></script>
<script src="<?= base_url(); ?>assets/frontend/js/jquery.bxslider.js"></script>
<script src="<?= base_url(); ?>assets/frontend/js/main.js"></script>

<script src=https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js></script>
<script src="<?php echo base_url(); ?>assets/js/libs/functions.js"></script>
<script src="<?php echo base_url(); ?>assets/frontend/js/libs/header.js"></script>
<script type="text/javascript">
        window._site_url = '<?php echo site_url(); ?>/';
    </script>
</head>
<body ng-app="MyApp" ng-controller="MyController">
<div class="admin-sec">
    <div class="container">   
      <nav class="main-nav">
			<ul>
				<!-- inser more links here -->
				<li><a class="cd-signin" href="#0">Login</a></li>
				<li><a class="cd-signup" href="#0">Register</a></li>
			</ul>
		</nav>
        <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
		<div class="cd-user-modal-container"> <!-- this is the container wrapper -->
			<ul class="cd-switcher">
				<li><a href="#0">Sign in</a></li>
				<li><a href="#0">New account</a></li>
			</ul>

			<div id="cd-login"> <!-- log in form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="signin-username">Username</label>
						<input class="full-width has-padding has-border" ng-model="username" type="text" placeholder="Username">
						<span class="cd-error-message" id="username-error"></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signin-password">Password</label>
						<input class="full-width has-padding has-border" ng-model="password" type="text"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message" id="password-error"></span>
					</p>

					<!--<p class="fieldset">
						<input type="checkbox" id="remember-me" checked>
						<label for="remember-me">Remember me</label>
					</p>-->

					<p class="fieldset">
						<input class="full-width has-padding" type="button" value="Login" ng-click="login()">
					</p>
				</form>
				
				<p class="cd-form-bottom-message"><a href="#0">Forgot your password?</a></p>
				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-login -->

			<div id="cd-signup"> <!-- sign up form -->
				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-username" for="signup-username">Username</label>
						<input class="full-width has-padding has-border" ng-model="r_username" type="text" placeholder="Username">
						<span class="cd-error-message" id="r_username-error"></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-email" for="signup-email">E-mail</label>
						<input class="full-width has-padding has-border" ng-model="r_email" type="text" placeholder="E-mail">
						<span class="cd-error-message" id="r_email-error"></span>
					</p>

					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Password</label>
						<input class="full-width has-padding has-border" ng-model="r_password" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message" id="r_password-error"></span>
					</p>
					<p class="fieldset">
						<label class="image-replace cd-password" for="signup-password">Re-enter Password</label>
						<input class="full-width has-padding has-border" ng-model="r_password1" type="password"  placeholder="Password">
						<a href="#0" class="hide-password">Hide</a>
						<span class="cd-error-message"></span>
					</p>

					<!--<p class="fieldset">
						<input type="checkbox" id="accept-terms">
						<label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
					</p>-->

					<p class="fieldset">
						<input class="full-width has-padding" type="button" value="Create account" ng-click="register()">
					</p>
				</form>

				<!-- <a href="#0" class="cd-close-form">Close</a> -->
			</div> <!-- cd-signup -->

			<div id="cd-reset-password"> <!-- reset password form -->
				<p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

				<form class="cd-form">
					<p class="fieldset">
						<label class="image-replace cd-email" for="reset-email">E-mail</label>
						<input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
						<span class="cd-error-message">Error message here!</span>
					</p>

					<p class="fieldset">
						<input class="full-width has-padding" type="submit" value="Reset password">
					</p>
				</form>

				<p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
			</div> <!-- cd-reset-password -->
			<a href="#0" class="cd-close-form">Close</a>
		</div> <!-- cd-user-modal-container -->
	</div>
    </div>
  </div>
  <div class="clear"></div>
  <div class="header">
    <div class="container">
      <div class="logo-section"> <a href="#"><img src="<?= base_url(); ?>assets/frontend/images/logo.png"> </a> </div>
      <div id="nav">
        <div class="nav">
          <ul>
            <li><a href="index.php" class="hvr-rectangle-out">Home </a></li>
            <li><a href="about-us.php" class="hvr-rectangle-out">About Us</a></li>
            <li><a href="contact-us.php" class="hvr-rectangle-out">Contact Us</a></li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>