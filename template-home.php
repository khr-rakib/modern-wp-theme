   <?php 
      /*
      Template Name: Home Page
      */
      get_header();
      $options = get_option( 'modern_framework' );
   ?>
   <!-- Slider Area Start -->
   <section class="slider-area" id="home">
      <div class="slider owl-carousel">

         <?php
            $args = [
               'post_type' => 'slider',
               'post_per_page' => 5
            ];
            $query = new WP_query($args);

            while( $query->have_posts() ){
               $query->the_post();
               $sub_heading = get_post_meta( get_the_ID(), 'sub_heading', true );
               $btn_text = get_post_meta( get_the_ID(), 'btn_text', true );
               $btn_link = get_post_meta( get_the_ID(), 'btn_link', true );
         ?>
            <div class="single-slide" style="background-image:url('<?php the_post_thumbnail_url(); ?>')">
               <div class="container">
                  <div class="row">
                     <div class="col-xl-12">
                        <div class="slide-table">
                           <div class="slide-tablecell">
                              <h4><?php echo $sub_heading; ?></h4>
                              <h2> <?php the_title(); ?> </h2>
                              <?php the_content(); ?>
                              <?php if( $btn_text && $btn_link  ){ ?>                                    
                                 <a href="<?php echo $btn_link; ?>" class="box-btn"><?php echo $btn_text; ?> <i class="fa fa-angle-double-right"></i></a>
                              <?php } ?>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>

         <?php }  wp_reset_postdata(); ?>
      </div>
   </section>
   <!-- Slider Area Start -->
   <!-- About Area Start -->
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
               <?php if($options['our_plans']){ foreach($options['our_plans'] as $item ){ ?>
                  <div class="single_about">
                     <i class="<?php echo $item['our_plan_icon']; ?>"></i>
                     <h4><?php echo $item['our_plan_name']; ?></h4>
                     <p><?php echo $item['our_plan_shortdesc']; ?></p>
                  </div>
               <?php }} else { echo 'Please add your plans'; } ?>               
            </div>
         </div>
      </div>
   </section>
   <!-- About Area End -->
   <!-- Choose Area End -->
   <section class="choose">
      <div class="container">
         <div class="row pt-100 pb-100">
            <div class="col-md-6">
               <div class="faq">
                  <div class="page-title">
                     <h4>faq</h4>
                  </div>
                  <div class="accordion" id="accordionExample">                     
                     <?php foreach($options['faq_group'] as $item){   ?>

                     <div class="card">
                        <div class="card-header" id="headingOne">
                           <h5 class="mb-0">
                              <button class="btn btn-link" type="button" data-toggle="collapse"
                                 data-target="#<?php echo sanitize_title($item['faq_title']); ?>" aria-expanded="true" aria-controls="collapseOne">
                                 <?php echo $item['faq_title']; ?>
                              </button>
                           </h5>
                        </div>
                        <div id="<?php echo sanitize_title($item['faq_title']); ?>" class="collapse show" aria-labelledby="headingOne"
                           data-parent="#accordionExample">
                           <div class="card-body">
                              <?php echo $item['faq_desc']; ?>
                           </div>
                        </div>
                     </div>
                     <?php } ?>
                     
                  </div>
               </div>
            </div>
            <div class="col-md-6">
               <div class="skills">
                  <div class="page-title">
                     <h4>our skills</h4>
                  </div>
                  <div class="single-skill">
                     <h4>html</h4>
                     <div class="progress-bar" role="progressbar" style="width: 90%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">90%</div>
                  </div>
                  <div class="single-skill">
                     <h4>css</h4>
                     <div class="progress-bar" role="progressbar" style="width: 74%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">74%</div>
                  </div>
                  <div class="single-skill">
                     <h4>photoshop</h4>
                     <div class="progress-bar" role="progressbar" style="width: 94%;" aria-valuenow="25"
                        aria-valuemin="0" aria-valuemax="100">94%</div>
                  </div>
                  <div class="single-skill">
                     <h4>wordpress</h4>
                     <div class="progress-bar" role="progressbar" style="width: 85%;" aria-valuenow="85"
                        aria-valuemin="0" aria-valuemax="100">85%</div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Choose Area End -->
   <!-- Services Area Start -->
   <section class="services-area pt-100 pb-50" id="services">
      <div class="container">
         <div class="row section-title">
            <div class="col-md-6 text-right">
               <h3><span>who we are?</span> our services</h3>
            </div>
            <div class="col-md-6">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
         </div>
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

   <!-- Counter Area End -->
   <section class="counter-area">
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-3">
               <div class="single-counter">
                  <h4><i class="fa fa-user"></i><span class="counter">567</span>customers</span></h4>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-counter">
                  <h4><i class="fa fa-code"></i><span class="counter">236</span>line of codes</h4>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-counter">
                  <h4><i class="fa fa-file"></i><span class="counter">789</span>users</h4>
               </div>
            </div>
            <div class="col-md-3">
               <div class="single-counter">
                  <h4><i class="fa fa-coffee"></i><span class="counter">1,395</span>cup of coffees</h4>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Counter Area End -->
   <!-- Team Area Start -->
   <section class="team-area pb-100 pt-100" id="team">
      <div class="container">
         <div class="row section-title">
            <div class="col-md-6 text-right">
               <h3><span>who we are?</span> creative team</h3>
            </div>
            <div class="col-md-6">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
         </div>
         <div class="row">
         <?php
            
            $query = new WP_query([
               'post_type' => 'team',
               'post_per_page' => 3
            ]);

            while($query->have_posts()){
               $query->the_post();
               $team_name           = get_field('team_name');
               $team_designation    = get_field('team_designation');
               $team_profile_image  = get_field('team_profile_image');
               $team_facebook       = get_field('team_facebook');
               $team_twitter        = get_field('team_twitter');
               $team_linkedin       = get_field('team_linkedin');
               $team_google_plus    = get_field('team_google_plus');           
         ?>
            <div class="col-md-4">
               <div class="single-team">
                  <img src="<?php echo $team_profile_image['url']; ?>" alt="" />                  
                  <div class="team-hover">
                     <div class="team-content">
                        <h4><?php echo $team_name; ?> <span><?php echo $team_designation; ?></span></h4>
                        <ul>
                           <?php if($team_facebook) { ?>
                              <li><a href='<?php echo $team_facebook ?>'><i class='fa fa-facebook'></i></a></li>
                           <?php } ?>
                           <?php if($team_twitter) { ?>
                              <li><a href='<?php echo $team_twitter; ?>'><i class='fa fa-twitter'></i></a></li>
                           <?php } ?>
                           <?php if($team_linkedin) { ?>
                              <li><a href="<?php echo $team_linkedin; ?>"><i class="fa fa-linkedin"></i></a></li>
                           <?php } ?>
                           <?php if($team_google_plus) { ?>
                              <li><a href="<?php echo $team_google_plus; ?>"><i class="fa fa-google-plus"></i></a></li>
                           <?php } ?>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            
         <?php } wp_reset_postdata(); ?>

         </div>
      </div>
   </section>
   <!-- Team Area End -->

   <!-- Testimonials Area Start -->
   <section class="testimonial-area pb-100 pt-100" id="testimonials">
      <div class="container">
         <div class="row section-title white-section">
            <div class="col-md-6 text-right">
               <h3><span>who we are?</span> what client say</h3>
            </div>
            <div class="col-md-6">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-md-12">
               <div class="testimonials owl-carousel">
               <?php
                  $query = new WP_query([
                     'post_type' => 'testimonial',
                     'post_per_page' => 5
                  ]);
                  while($query->have_posts()){
                     $query->the_post();
                     $client_image = get_field('client_image');
                     $_client_name = get_field('_client_name');
                     $client_designation = get_field('client_designation');
                     $review_content = get_field('review_content');                  
               ?>

                  <div class="single-testimonial">
                     <div class="testi-img">
                        <img src="<?php echo $client_image; ?>" alt="" />
                     </div>
                     <p>" <?php echo $review_content; ?> "</p>
                     <h4><?php echo $_client_name; ?> <span><?php echo $client_designation; ?></span></h4>
                  </div>
               <?php } wp_reset_postdata(); ?>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- Testimonilas Area End -->
   <!-- Latest News Area Start -->
   <section class="blog-area pb-100 pt-100" id="blog">
      <div class="container">
         <div class="row section-title">
            <div class="col-md-6 text-right">
               <h3><span>who we are?</span> latest news</h3>
            </div>
            <div class="col-md-6">
               <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d </p>
            </div>
         </div>
         <div class="row">
         <?php 
            $query = new WP_query([
               'post_type' => 'post',
               'posts_per_page' => 3
            ]);
            while ($query->have_posts()) {
               $query->the_post();
         ?>

            <div class="col-md-4">
               <div class="single-blog">                  
                  <?php the_post_thumbnail(); ?>
                  <div class="post-content">
                     <div class="post-title">
                        <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
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
   <!-- Latest News Area End -->

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
   <!-- CTA Area End -->
   <?php get_footer(); ?>