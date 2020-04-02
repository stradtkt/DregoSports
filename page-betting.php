<?php

// Template Name: Betting

get_header();
?>

<section id="nfl-betting">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="nfl-betting selection">
                    <div class="title">
                        <a href="<?php echo site_url('/betting'); ?>" class="betting-category-link"><h2 class="text-center text-white">NFL</h2></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="mlb-betting selection">
                    <div class="title">
                        <a href="<?php echo site_url('/betting'); ?>" class="betting-category-link"><h2 class="text-center text-white">MLB</h2></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>
        <div class="row">
            <div class="col-12 col-md-10">
                <div class="nba-betting selection">
                    <div class="title">
                        <a href="<?php echo site_url('/betting'); ?>" class="betting-category-link"><h2 class="text-center text-white">NBA</h2></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-2"></div>
        </div>
    </div>
</section>



<?php

get_footer();