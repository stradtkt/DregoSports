<?php

// Template Name: Home

get_header();
?>

<section id="header-main">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="fantasy">
                    <div class="overlay d-flex flex-column">
                        <h1 class="text-center text-white mt-auto">Fantasy</h1>
                        <a href="" disabled class="btn btn-danger mt-auto">Coming Soon</a>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="betting">
                    <div class="overlay d-flex flex-column">
                        <h1 class="text-center text-white mt-auto">Betting</h1>
                        <a href="<?php echo site_url('/betting'); ?>" class="btn btn-danger mt-auto">Enter</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="features">
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-12 col-md-3">
                <div class="card card-content feature-cards p-2">
                    <p class="text-center"><i class="fas fa-calendar-plus"></i></p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum repudiandae soluta, laudantium rerum eligendi!</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-content feature-cards p-2">
                    <p class="text-center"><i class="fas fa-money-bill-alt"></i></p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum repudiandae soluta, laudantium rerum eligendi!</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-content feature-cards p-2">
                    <p class="text-center"><i class="fab fa-cc-stripe"></i><i class="fab fa-cc-paypal"></i></p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum repudiandae soluta, laudantium rerum eligendi!</p>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-content feature-cards p-2">
                    <p class="text-center"><i class="fas fa-newspaper"></i></p>
                    <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum cum repudiandae soluta, laudantium rerum eligendi!</p>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
get_footer();