<?php 
/* Template Name: Portflio */ 
get_header();
?>

   <!-- Header Area Start -->
   <section class="breadcumb-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                  <h4>Portfolio</h4>
                  <ul>
                     <li><a href=""></a>Home</li> /
                     <li>Portfolio</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- projectss Area Start -->
   <section class="projects-area pb-100 pt-100" id="projects">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="portfolio-menu mb-40 text-center">
                  <button class="active" data-filter="*">ALL</button>

                  <?php 
                     $portfolio_menus = get_terms('portfolio-cat');                     
                     foreach($portfolio_menus as $item ){                     
                  ?>
                  <button data-filter=".<?php echo $item->slug; ?>" class=""><?php echo $item->name; ?> </button>
                  <?php } ?>
               </div>
            </div>
         </div>
         <div class="row grid no-gutters">

            <?php
               $args = [
                  'post_type' => 'portfolio',
                  'posts_per_page' => 9
               ];

               $query = new WP_query($args);
               while ($query->have_posts()) {
                  $query->the_post();
                  $portfolio_title = get_field('portfolio_title');
                  $portfolio_content = get_field('portfolio_content');
                  $portfolio_photo = get_field('portfolio_photo');
               
            ?>


            <div class="col-md-4 grid-item <?php
               $portfolio_grids = get_the_terms(get_the_ID(), 'portfolio-cat');
               foreach($portfolio_grids as $portfolio_grid){
                  echo $portfolio_grid->slug.' ';
               }
            ?>">
               <div class="single-portfolio">
                  <img src="<?php echo $portfolio_photo; ?>" alt="">
                  <div class="portfolio-hover">
                     <div class="portfolio-content">
                        <h3><a href="" class=""><i class="fa fa-link"></i> <?php echo $portfolio_title;?>
                              <span><?php echo $portfolio_content; ?></span></a></h3>
                     </div>
                  </div>
               </div>
            </div>
            <?php } wp_reset_postdata(); ?>
         </div>
      </div>
   </section>
   <!-- projectss Area End -->
<?php 
   get_footer();
?>
