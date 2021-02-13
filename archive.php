<?php get_header(); ?>

<section class="blog-area pb-100 pt-100" id="blog">
      <div class="container">        
         <div class="row">
         <?php            
            while (have_posts()) {
               the_post();
         ?>

            <div class="col-md-4">
               <div class="single-blog">                  
                  <?php the_post_thumbnail(); ?>
                  <div class="post-content">
                     <div class="post-title">
                        <h4><a href="#"><?php the_title();?></a></h4>
                     </div>
                     <div class="pots-meta">
                        <ul>
                           <li><a href="#"><?php echo get_the_date(); ?></a></li>
                           <li><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo get_the_author(); ?></a></li>
                        </ul>
                     </div>
                     <div> <?php echo wp_trim_words( get_the_content(), 20, '...'); ?> </div>
                     <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         <?php } wp_reset_postdata(); ?>
         </div>
      </div>
   </section>


<?php get_footer(); ?>