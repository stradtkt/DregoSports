<?php
// Template Name: RSS
get_header();
?>

<section id="login-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="betting">
                    <h1 class="text-left"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="rss-section" class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">ESPN NFL FEEDS</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <?php echo do_shortcode('[wp-rss-aggregator feeds="www-espn-com-nfl"]'); ?>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();