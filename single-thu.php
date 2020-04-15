<?php
get_header();

?>



<section id="login-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="betting">
                    <h1 class="text-left">Thursday: <?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="single-thursday-section" class="mt-5 mb-5">
    <div class="container">
        <?php 
        
        if(have_posts()) {
            while(have_posts()) {
                the_post(); ?>

        <div class="card card-body">
            <div class="row">
                <div class="col-12 col-md-6 text-left">
                    <span class="pr"><?php the_field('percentage_right'); ?>%</span>
                    <span class="name"><?php the_field('home_name'); ?></span>
                    <span class="num"><?php the_field('home_num'); ?></span>
                </div>
                <div class="col-12 col-md-6 text-right">
                    <span class="num"><?php the_field('away_num'); ?></span>
                    <span class="name"><?php the_field('away_name'); ?></span>
                </div>
            </div>
        </div>

           <?php } } ?>
    </div>
</section>


<?php

get_footer();