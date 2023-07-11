<!DOCTYPE html>
<html>
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title><?php echo $title; ?></title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/error.css">
      <!-- fevicon -->
      <link rel="icon" href="<?php echo base_url(); ?>assets/images/fevicon.png" type="image/gif" />
      <!-- font css -->
      <link href="<?php echo base_url(); ?>assets/https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link href="<?php echo base_url(); ?>assets/https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
    <div class="header_section header_bg" style="background-image: linear-gradient(to bottom, rgba(222, 132, 117, 0.8), rgba(222, 132, 117, 0.8)), url(<?php echo base_url(); ?>assets/images/regime-2.jpg);">

         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="<?php echo base_url(); ?>assets/index.html"><img src="<?php echo base_url(); ?>assets/images/R__1_-removebg-preview.png" style="height: 100px !important;" ></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>assets/index.html">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo site_url('objectif/index'); ?>">Nouvel Objectif</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>assets/coffees.html">Coffees</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>assets/shop.html">Shop</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>assets/blog.html">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="<?php echo base_url(); ?>assets/contact.html">Contact</a>
                     </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                     <div class="login_bt">
                        <ul>
                           <li><a href="<?php echo base_url(); ?>assets/#"><span class="user_icon"><i class="fa fa-user" aria-hidden="true"></i></span>Login</a></li>
                           <li><a href="<?php echo base_url(); ?>assets/#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                        </ul>
                     </div>
                  </form>
               </div>
            </nav>
         </div>
      </div>