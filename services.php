<?php
    // Template Name: Services
?>

<?php get_header() ?>

    <section id="first" class="services_web">
        <div class="container">
            <div class="services_web_wrapper">
                <div class="services_web_group">
                    <div class="services_web_text">
                        <h2><?php echo get_field('services_web_title') ?></h2>
                        <p>
                            <?php echo get_field('services_web_text1') ?>
                        </p>
                        <p>
                        <?php echo get_field('services_web_text2') ?>
                        </p>
                        <h4><?php echo get_field('services_web_h5') ?></h4>
                        <h3><?php echo get_field('services_web_price') ?></h3>
                        <h5><?php echo get_field('services_web_h6') ?></h5>
                    </div>
                    <div class="services_web_img">
                        <img src="<?php echo get_field('services_web_img')['url'] ?>" alt="">
                    </div>
                </div>
                <div class="services_web_chevron">
                    <a href="#second"><i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </section>
    
    <section id="second" class="services_graphic">
        <div class="container">
            <div class="services_graphic_wrapper">
                <div class="services_graphic_group">
                    <div class="services_graphic_text">
                        <h2><?php echo get_field('services_graphic_title') ?></h2>
                        <p>
                            <?php echo get_field('services_graphic_text1') ?>
                        </p>
                        <p>
                        <?php echo get_field('services_graphic_text2') ?>
                        </p>
                        <h4><?php echo get_field('services_graphic_h5') ?></h4>
                        <h3><?php echo get_field('services_graphic_price') ?></h3>
                        <h5><?php echo get_field('services_graphic_h6') ?></h5>
                    </div>
                    <div class="services_graphic_img">
                        <img src="<?php echo get_field('services_graphic_img')['url'] ?>" alt="">
                    </div>
                </div>
                <div class="services_graphic_chevron">
                    <a href="#third"><i class="fa-solid fa-chevron-down"></i></a>
                </div>
            </div>
        </div>
    </section>

    <section id="third" class="services_social">
        <div class="container">
            <div class="services_social_wrapper">
                <div class="services_social_group">
                    <div class="services_social_text">
                        <h2><?php echo get_field('services_social_title') ?></h2>
                        <p>
                            <?php echo get_field('services_social_text1') ?>
                        </p>
                        <p>
                        <?php echo get_field('services_social_text2') ?>
                        </p>
                        <h4><?php echo get_field('services_social_h5') ?></h4>
                        <h3><?php echo get_field('services_social_price') ?></h3>
                        <h5><?php echo get_field('services_social_h6') ?></h5>
                    </div>
                    <div class="services_social_img">
                        <img src="<?php echo get_field('services_social_img')['url'] ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="contact">
        <div class="contact_wrapper">
            <div class="contact_text">
                <h3><?php echo get_field('services_contact_title') ?></h3>
                <p>
                    <?php echo get_field('services_contact_text') ?>
                </p>
            </div>
            <div class="contact_button">
                <button class="yellow_btn" role="button">Contact Us</button>
            </div>
        </div>
    </section>

<?php get_footer() ?>