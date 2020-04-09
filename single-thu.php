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

        <div class="card card-body">
            <div class="row">
                <div class="col-12 col-md-6 text-right">
                    <img src="<?php the_field('home_img'); ?>" alt="<?php the_title(); ?>" class="matchup-img home">
                    <span class="name"><?php the_field('home_name'); ?></span>
                    <span class="num"><?php the_field('home_num'); ?></span>
                </div>
                <div class="col-12 col-md-6">
                    <span class="num"><?php the_field('away_num'); ?></span>
                    <span class="name"><?php the_field('away_name'); ?></span>
                    <img src="<?php the_field('away_img'); ?>" alt="<?php the_title(); ?>" class="matchup-img">
                </div>
            </div>
        </div>

           <?php } } ?>
    </div>
</section>


<?php

get_footer();