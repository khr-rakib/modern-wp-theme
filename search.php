<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">                    
                    <h4><?php printf('You are searching: %s', get_search_query() ); ?> </h4>                    
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <?php
                if(have_posts()){
                    while(have_posts()) {
                        the_post();
            ?>
            <div class="single-blog">
                <?php the_post_thumbnail();?>
                <div class="post-content">
                    <div class="post-title">
                    <h4><a href="<?php the_permalink();?>"><?php the_title();?></a></h4>
                    </div>
                    <div class="pots-meta">
                    <ul>
                        <li><?php the_category(', ');?></li> 
                        <li><a href="#"><?php echo get_the_date();?></a></li>
                        <li><a href="#"><?php echo get_the_author();?></a></li>
                    </ul>
                    </div>
                    <?php the_excerpt();?>
                    <a href="<?php the_permalink();?>" class="box-btn">read more <i class="fa fa-angle-double-right"></i></a>
                </div>
            </div>

            <?php }} else { echo 'Not Found'; } ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('blog_sidebar');?>
        </div>
    </div>
</div>


<?php get_footer(); ?>