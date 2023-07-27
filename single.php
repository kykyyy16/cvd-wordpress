<?php get_header() ?>

    <div class="thePost">
        <div class="container">
            <div class="thePost__wrapper">
                <h1><?php the_title() ?></h1>
                <?php echo get_the_post_thumbnail() ?>
                <?php echo the_content() ?>
            </div>
        </div>
    </div>

<?php get_footer() ?>