<?php get_header(); ?>

   <section class="breadcumb-area">
      <div class="container">
         <div class="row">
            <div class="col-xl-12">
               <div class="breadcumb">
                  <h4>Single Blog</h4>
                  <ul>
                     <li><a href="<?php echo get_home_url(); ?>">Home</a></li> /
                     <li>Single Blog</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </section>

   <section class="blog-single pt-100 pb-100">
      <div class="container">
         <div class="row">
            <div class="col-xl-8">
               <h2><?php the_title();?></h2>
               <?php the_post_thumbnail(); ?>
               <?php the_content(); ?>
               <div class="comments">                  
                  <?php comments_template(); ?>
               </div>
            </div>
            <div class="col-xl-4">
               <?php dynamic_sidebar('blog_sidebar'); ?>
            </div>
         </div>
      </div>
   </section>
<?php get_footer(); ?>