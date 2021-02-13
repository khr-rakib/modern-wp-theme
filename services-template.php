<?php 
   /* Template Name: Services */ 
   get_header();
?>

   <section class="breadcumb-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                  <h4>Our Services</h4>
                  <ul>
                     <li><a href="<?php echo get_home_url(); ?>">Home</a></li> /
                     <li>Our Services</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- Services Area Start -->
   <section class="services-area pt-100 pb-50" id="services">
      <div class="container">
         <div class="row">

            <?php
               $args = [
                  'post_type' => 'service',
                  'post_per_page' => 6
               ];
               $query = new WP_query( $args );
               while( $query->have_posts() ){
                  $query->the_post();
                  $service_icon = get_post_meta( get_the_ID(), 'service_icon', true );            
            ?>
            <div class="col-lg-4 col-md-6">
               <!-- Single Service -->
               <div class="single-service">
                  <i class="<?php echo $service_icon; ?>"></i>
                  <h4><?php the_title(); ?> </h4>
                  <?php the_content(); ?>
               </div>
            </div>
            <?php } ?>
         </div>
      </div>
   </section>
   <!-- Services Area End -->
   <!-- CTA Area Start -->
   <section class="cta">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h4>best solution for your business <span>the can be used on larger scale projectss as well as small
                     scale projectss</span></h4>
            </div>
            <div class="col-md-6 text-center">
               <a href="#" class="box-btn">contact us <i class="fa fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
   </section>
<?php 
   get_footer();
?>
