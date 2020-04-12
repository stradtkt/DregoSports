<?php
// Template Name: Sunday
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

<section id="sunday-section" class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 offset-lg-2">
                <div id="caution" class="caution"></div>
                <p class="lead"><strong>THESE SPREADS ARE DETERMINED BY CLOSING ODDS. THEREFORE SHOULD BE USED OF A MAX 15 MINUTES PRIOR TO SELECTED GAME(S) KICKOFF.</strong></p>
                <a href="<?php echo site_url('/sunday-list'); ?>" class="btn">Enter Now</a>
            </div>
        </div>
    </div>
</section>

<!-- <section id="sunday-section" class="mt-5 mb-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center"><strong>Sunday</strong></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p class="lead"><i class="fas fa-check"></i> Complete Access To Sunday's Games</p>
                <ul>
                    <li>1:00 EST Games</li>
                    <li>4:00 EST Games</li>
                    <li>Sunday Night Games</li>
                </ul>
                <p class="lead"><i class="fas fa-check"></i> Multiple Closing Spread Analysis</p>
                <ul>
                    <li></li>
                </ul>
            </div>
        </div>
    </div>
</section> -->

<?php

get_footer();