<?php

//Template Name: Thursday Week 5
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
                <div class="col-12 col-md-6 col-lg-6 text-left">
                    <span class="pr">75%</span>
                    <span class="name">Bengals</span>
                    <span class="num">+6</span>
                </div>
                <div class="col-12 col-md-6 col-lg-6 text-right">
                    <span class="num">-6</span>
                    <span class="name">Ravens</span>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>