<?php $options = get_option( 'modern_framework' ); ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">   
   <!-- Font Google -->
   <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" />
   <?php wp_head();?>
</head>

<body>
   <section class="header-top">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-sm-12">
               <div class="header-left">
                  <?php if( $options['header_email'] ) { ?>
                     <a href="mailto:<?php echo $options['header_email']; ?>"><i class="fa fa-envelope"></i> <?php echo $options['header_email']; ?> </a>
                  <?php } else { echo 'Email address...'; } ?>
                  <?php if( $options['header_phone'] ) { ?>
                     <a href="tel:<?php echo $options['header_phone']; ?>"><i class="fa fa-phone"></i> <?php echo $options['header_phone']; ?></a>
                  <?php } else { echo 'Mobile number...'; } ?>

               </div>
            </div>
            <div class="col-md-6 col-sm-12 text-right">
               <div class="header-social">
                  <?php 
                     if($options['header_icons']){
                     foreach( $options['header_icons'] as $item ) { ?>
                     <a href="<?php echo $item['social_link']; ?>"><i class="<?php echo $item['social_icon']; ?>"></i></a>
                  <?php }} else { echo "Please insert your social links"; } ?>                  
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Header Area Start -->
   <header class="header header-fixed">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <nav class="navbar navbar-expand-md navbar-light">
                  <a class="navbar-brand" href="<?php echo get_home_url(); ?>">
                     <?php if( $options['header_logo'] ){ ?>
                        <img src="<?php echo $options['header_logo']['url'];  ?>" alt="Modern" width="80">
                     <?php } else { echo 'Modern'; } ?>
                  </a>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                     aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse ml-auto mainmenu justify-content-end" id="navbarNav">                     
                     <?php
                        wp_nav_menu([
                           'theme_location' => 'primary_manu',
                           'menu_class'     => 'navbar-nav ml-auto'
                        ]);
                     ?>
                  </div>
               </nav>
            </div>
         </div>
      </div>
   </header>
   <!-- Header Area Start -->