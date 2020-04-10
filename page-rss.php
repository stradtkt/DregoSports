<?php
// Template Name: RSS
get_header();
?>

<section id="register-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="betting">
                    <h1 class="text-left"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="register-section">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="card card-body">
                   <?php echo do_shortcode('[wp-rss-aggregator feeds="www-espn-com-nfl"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();