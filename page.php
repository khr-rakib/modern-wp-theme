<?php get_header(); ?>

<section class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="breadcumb">
                    <?php
                        while(have_posts()){
                            the_post();
                    ?>
                        <h4><?php the_title();?></h4>
                        <ul>
                            <li><a href="<?php echo site_url();?>">Home</a></li> / 
                            <li><?php the_title();?></li>
                        </ul>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container py-5">
    <div class="row">
        <div class="col-md-8">
            <?php the_content(); ?>
        </div>
        <div class="col-md-4">
            <?php dynamic_sidebar('blog_sidebar');?>
        </div>
    </div>
</div>





<?php get_footer(); ?>