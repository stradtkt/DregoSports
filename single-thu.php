<?php
get_header();

?>



<section id="archive-thu-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-left"><?php the_title(); ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="login-section" class="mt-5 mb-5">
    <div class="container">
        <?php 
        
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

        <div class="row">
            <div class="col-12 col-md-6">
                <img src="<?php the_field('home_img'); ?>" alt="<?php the_title(); ?>">
                <?php the_field('home_name'); ?>
                <?php the_field('home_num'); ?>
            </div>
            <div class="col-12 col-md-6">
                <img src="<?php the_field('away_img'); ?>" alt="<?php the_title(); ?>">
                <?php the_field('away_name'); ?>
                <?php the_field('away_num'); ?>
            </div>
        </div>

           <?php } } ?>
    </div>
</section>


<?php

get_footer();