<?php

//Template Name: Sunday Week 5
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

<section id="sunday-section-week" class="mt-5 mb-5">
    <div class="container">
        <div class="card card-body">
            <div class="row">
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-left">
                    <p class="spread-title">GAME</p>
                    <div class="away"><span class="name">CIN</span><span class="score"></span></div>
                    <div class="home"><span class="name">BAL</span><span class="score"></span></div>
                    <div class="time text-center">1:15PM EST</div>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-center">
                    <p class="spread-title">CONFIDENCE</p>
                    <p class="num">25%</p>
                    <p class="num">75%</p>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-center">
                    <p class="spread-title">OPENER</p>
                    <p class="num">+6</p>
                    <p class="num">-6</p>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-center">
                    <p class="spread-title">CONSENSUS</p>
                    <p class="num">+6</p>
                    <p class="num">-6</p>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-center">
                    <p class="spread-title">DraftKings</p>
                    <p class="num">-3</p>
                    <p class="num">+3</p>
                </div>
                <div class="col-2 col-sm-2 col-md-2 col-lg-2 text-center">
                    <p class="spread-title">FanDuel</p>
                    <p class="num">-3</p>
                    <p class="num">+3</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
