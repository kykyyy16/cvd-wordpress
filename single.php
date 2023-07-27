<?php get_header() ?>

    <div class="thePost">
        <div class="container">
            <div class="thePost__wrapper">
                <h1><?php the_title() ?></h1>
                <p><small><?php echo get_the_date('M d Y') ?></small></p>
                <?php echo the_category() ?>
                <?php echo the_content() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>