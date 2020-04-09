<?php
// Template Name: Register
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
                <div class="card">
                    <div class="card-header">
                        <h3>Register With Drego Sports</h3>
                    </div>
                    <div class="card-body">
                        <?php 
                        echo do_shortcode('[user_registration_form id="39"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();