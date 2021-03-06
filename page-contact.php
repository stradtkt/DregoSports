<?php

// Template Name: Contact
get_header();
?>


<section id="contact-main">
    <div class="container-fluid">
        <div class="row">
            <div class="col col-md-12">
                <div class="betting">
                    <h1 class="text-left"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact-section">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-left">Contact Drego Sports</h3>
                    </div>
                    <div class="card-body">
                        <?php 
                        echo do_shortcode('[ninja_form id=2]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php get_footer(); ?>