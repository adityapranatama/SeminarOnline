<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
  <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
  <meta name="author" content="PIXINVENT">
  <title>Sem-ON Seminar Online</title>
  <link rel="apple-touch-icon" href="<?php echo base_url('')?> app-assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('app-assets/images/ico/favicon.ico')?>">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i"
  rel="stylesheet">
  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/vendors.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/extensions/unslider.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/weather-icons/climacons.min.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/meteocons/style.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/vendors/css/charts/morris.css')?>">
  <!-- END VENDOR CSS-->
  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/app.css')?>">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/menu/menu-types/vertical-menu-modern.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/fonts/simple-line-icons/style.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/core/colors/palette-gradient.css')?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('app-assets/css/pages/timeline.css')?>">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
  <!-- END Custom CSS-->
</head>
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
  <nav class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto">
            <a class="navbar-brand" href="index.html">
              <img class="brand-logo" alt="stack admin logo" src="<?php echo base_url('app-assets/images/logo/stack-logo-light.png')?>">
              <h2 class="brand-text">Stack</h2>
            </a>
          </li>
          <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
          <li class="nav-item d-md-none">
            <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a>
          </li>
        </ul>
      </div>
      <div class="navbar-container content">
        <div class="collapse navbar-collapse" id="navbar-mobile">
          <ul class="nav navbar-nav mr-auto float-left">
            
            <li class="nav-item d-none d-md-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
            
          </ul>
          <ul class="nav navbar-nav float-right">
            
            
            
            <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="<?php echo base_url('app-assets/images/portrait/small/avatar-s-1.png')?>" alt="avatar"><i></i></span>
                <span class="user-name">John Doe</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="user-profile.html"><i class="ft-user"></i> Edit Profile</a>
                <a class="dropdown-item" href="email-application.html"><i class="ft-mail"></i> My Inbox</a>
                <a class="dropdown-item" href="user-cards.html"><i class="ft-check-square"></i> Task</a>
                <a class="dropdown-item" href="chat-application.html"><i class="ft-message-square"></i> Chats</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="login-with-bg-image.html"><i class="ft-power"></i> Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

 <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
        <li class=" navigation-header">
          <span>Hallo Admin!</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right"
          data-original-title="General"></i>
        </li>
        <li class=" nav-item">
            <a href="<?php echo base_url('Admin/Admin/Dashboard') ?>">
                <i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">Dashboard</span>
            </a>
        </li>
        <li class=" nav-item"><a href="<?php echo base_url('Admin/Admin/Dashboard') ?>">
            <i class="ft-user"></i><span class="menu-title" data-i18n="">Daftar User</span></a>
        </li>

        <li class=" nav-item"><a href="#"><i class="ft-monitor"></i><span class="menu-title" data-i18n="">Seminar</span></a>
          <ul class="menu-content">
            <li>
                <a class="menu-item" href="<?php echo base_url('Admin/Admin/indexSeminar') ?>">Tambah Seminar</a>
            </li>
            <li>
                <a class="menu-item" href="<?php echo base_url('Admin/Admin/kelolaSeminar') ?>">Kelola Seminar</a>
            </li>
          </ul>
        </li>
    </div>
</div>