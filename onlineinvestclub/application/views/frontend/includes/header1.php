<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Online Invest</title>
<link href="<?= base_url(); ?>assets/frontend/css/print.css" rel="stylesheet" type="text/css" />
<link href="<?= base_url(); ?>assets/frontend/css/global.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
<script src="<?= base_url(); ?>assets/frontend/js/jquery-1.11.0.min.js"></script>
<script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery-ui.js"></script>
<link rel="stylesheet" href="<?= base_url(); ?>assets/css/jquery-ui.css">
<script src="<?= base_url(); ?>assets/js/angular.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/libs/functions.js"></script>

<script type="text/javascript">
        window._site_url = '<?php echo site_url(); ?>/';
</script>
</head>
<body ng-app="MyApp" ng-controller="MyController">
<div id="wrapper">
  <div class="nav-sec">
    <ul>
      <li><a href="<?= site_url(); ?>/dashboard"><span><img src="<?= base_url(); ?>assets/frontend/images/person-img.png" /></span> ABC</a>
        <div class="clear"></div>
      </li>
      <li><a href="<?= site_url(); ?>/profile" class="active"><span><img src="<?= base_url(); ?>assets/frontend/images/my-profile.png" /></span>My Profile</a></li>
      <li><a href="<?= site_url(); ?>/mynetwork"><span><img src="<?= base_url(); ?>assets/frontend/images/network-img.png" /></span>My Network</a></li>
    </ul>
  </div>
  <div id="content">
    <div class="content">
    <div class="logout-sec">
     <a href="<?= site_url(); ?>/logout" class="log-out">Log Out</a>
     <div class="clear"></div>
     </div>
      <div class="bnr"> 
        <div class="bnrcap">
          <div class="logo"> <a href="#"><img src="<?= base_url(); ?>assets/frontend/images/logo.png" /></a> </div>
          <div class="page-name">
            <h3>My Profile</h3>
          </div>
        </div>
      </div>
    </div>
    <marquee direction="left" behavior="right" class="marquee">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum is simply dummy text of the printing and typesetting industry</marquee>
</marquee>