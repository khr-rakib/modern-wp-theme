<?php 
/* Template Name: Gallery */ 
get_header();
?>

   <!-- Header Area Start -->
   <section class="breadcumb-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                  <h4>Gallery</h4>
                  <ul>
                     <li><a href=""></a>Home</li> /
                     <li>Gallery</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="gallery-area pt-100 pb-100">
      <div class="container">
         <div class="row">
         <?php
            $args = [
               'post_type' => 'gallery',
               'posts_per_page' => -1
            ];
            $query = new WP_query( $args );
            while($query->have_posts()){
               $query->the_post();
               $name = get_field('name');
               $small_image = get_field('small_image');
               $big_image = get_field('big_image');
         ?>
            <div class="col-xl-4">
               <div class="single-gallery">
                  <img src="<?php echo $small_image; ?>" alt="">
                  <div class="gallery-hover">
                     <div class="gallery-content">
                        <h3><a href="<?php echo $big_image; ?>" class="gallery"><i class="fa fa-plus"></i> <?php echo $name; ?> </a></h3>
                     </div>
                  </div>
               </div>
            </div>
         <?php } ?>
         </div>
      </div>
   </section>
   <?php get_footer(); ?>