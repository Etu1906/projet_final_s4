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

      <!-- header section end -->
      <!-- blog section start -->
      <div class="contact_section layout_padding mb-5" style="min-height:100vh;" >
         <div class="container">
            <div class="row">
               <div class="col-sm-12">
                  <h1 class="contact_taital">Login Admin</h1>
                  <div class="bulit_icon"><img src="<?php echo base_url(); ?>assets/images/bulit-icon.png"></div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="contact_section_2">
               
               <div class="row">
                  <div class="col-md-12">
                     
                     <div class="mail_section_1">
                        
                        <form action="<?php echo site_url('welcome/verify_admin'); ?>" method="post">
                        <p style='color:red; text-align:center;'><?php if(isset($erreur)) echo $erreur; ?></p>
                           <div class="row">
                              <div class="col-md-12">
                                 <input type="text" class="mail_text" placeholder="nom" name="nom" value='admin'>
                              </div>
                              
                         <div class="col-md-12">
                           <input type="password" class="mail_text" placeholder="mot de passe" name="mdp" value='admin'>
                        </div>
                           <div class="col-md-12 send_bt" > <input type="submit" value="Se connecter"> </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- blog section end -->
      <!-- footer section start -->
      <!-- footer section end -->
      <!-- copyright section start -->
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/error.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/jquery-3.0.0.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/plugin.js"></script>
     <!-- sidebar -->
     <script src="<?php echo base_url(); ?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
     <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>
     <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
     <script>
        AOS.init();
      </script>
  </body>
</html>