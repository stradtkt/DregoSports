<?php
// Template Name: Login
get_header();
?>

<section id="login-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-left">Login</h1>
            </div>
        </div>
    </div>
</section>

<section id="login-section">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        <h3>Log Into Drego Sports</h3>
                    </div>
                    <div class="card-body">
                        <?php 
                        wp_login_form(array(
                            'label_username' => __('Username or Email Address'),
                            'label_password' => __('Password'),
                            'id_username' => 'user_login',
                            'id_password' => 'user_pass'
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php

get_footer();