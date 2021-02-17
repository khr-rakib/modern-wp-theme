<?php 
/* Template Name: About Us */ 
get_header();
$options = get_option( 'modern_framework' );
?>

   <section class="breadcumb-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                  <h4>About Us</h4>
                  <ul>
                     <li><a href="<?php echo get_home_url(); ?>">Home</a></li> /
                     <li>About Us</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="about-area pt-100 pb-100" id="about">
      <div class="container">
         <div class="row section-title">
            <div class="col-md-6 text-right">
               <h3><span><?php echo $options['about_sub_heading']; ?></span> <?php echo $options['about_heading']; ?></h3>
            </div>
            <div class="col-md-6">
               <p> <?php echo $options['about_short_description']; ?> </p>
            </div>
         </div>
         <div class="row">
            <div class="col-md-7">
               <div class="about">
                  <div class="page-title">
                     <h4><?php echo $options['about_title']; ?></h4>
                  </div>
                  <p><?php echo $options['about_description']; ?></p>
                  <a href="<?php echo $options['about_button_link']; ?>" class="box-btn"><?php echo $options['about_button_text']; ?> <i class="fa fa-angle-double-right"></i></a>
               </div>
            </div>
            <div class="col-md-5">
               <?php foreach($options['our_plans'] as $item ){ ?>
                  <div class="single_about">
                     <i class="<?php echo $item['our_plan_icon']; ?>"></i>
                     <h4><?php echo $item['our_plan_name']; ?></h4>
                     <p><?php echo $item['our_plan_shortdesc']; ?></p>
                  </div>
               <?php } ?>
               
            </div>
         </div>
      </div>
   </section>
   <?php get_footer(); ?>