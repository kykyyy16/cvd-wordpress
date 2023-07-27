<?php
    // Template Name: About
?>

<?php get_header() ?>       

    <section class="abt-banner">
        <div class="container">
            <div class="abt-banner_wrapper">
                <div class="abt-banner_content">
                    <div class="abt-banner_text">
                        <h4><?php echo get_field('about_banner_h4') ?></h4>
                        <h1><?php echo get_field('about_banner_h1') ?></h1>
                        <p>
                            <?php echo get_field('about_banner_p1') ?>
                        </p>
                        <p>
                        <?php echo get_field('about_banner_p2') ?>
                        </p>
                    </div>
                    <div class="abt-banner_social">
                        <ul>
                            <li>
                                <a href=""><i class="fa-brands fa-facebook"></i></a>
                            </li>
                            <li><a href=""><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="abt-banner_img">
                    <img src="<?php echo get_field('about_banner_img')['url'] ?>" alt="">
                </div>
            </div>
            <div class="abt-banner_chevron">
                <a href=""><i class="fa-solid fa-chevron-down"></i></a>
            </div>
        </div>
    </section>

    <section class="rp">
        <div class="container">
            <div class="rp_title">
                <h2><?php echo get_field('about_rp_title') ?></h2>
                <p><?php echo get_field('about_rp_text') ?></p>
            </div>
            <div class="rp_wrapper">
            <?php if(have_rows('about_rp_repeater')) : while(have_rows('about_rp_repeater')) : the_row() ?>
                <div class="rp_item">
                    <img src="<?php echo get_sub_field('rp_item_img')['url'] ?>" alt="">
                    <div class="rp_item_text">
                        <h4><?php echo get_sub_field('rp_item_title') ?></h4>
                        <p>
                            <?php echo get_sub_field('rp_item_text') ?>
                        </p>
                    </div>
                </div>
                <?php
                  endwhile;
                else:
                  echo 'No Available Content';
                endif;
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="contact_wrapper">
            <div class="contact_text">
                <h3><?php echo get_field('about_contact_title') ?></h3>
                <p>
                    <?php echo get_field('about_contact_text') ?>
                </p>
            </div>
            <div class="contact_button">
                <button class="yellow_btn" role="button">Contact Us</button>
            </div>
        </div>
    </section>

<?php get_footer() ?>