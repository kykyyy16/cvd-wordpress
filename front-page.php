<?php get_header() ?>

    <section class="home-banner">
        <div class="container">
            <div class="home-banner_wrapper">
                <div class="home-banner_content">
                    <div class="home-banner_text">
                        <h1><?php echo get_field('home_banner_title') ?></h1>
                        <p>
                            <?php echo get_field('home_banner_text') ?>
                        </p>
                    </div>
                    <div class="home-banner_btn">
                        <!-- <a href="" class="btn bg--light">Explore more</a> -->
                        <button class="yellow_btn" role="button">Explore more</button>
                    </div>
                </div>
                <div class="home-banner_img">
                    <img src="<?php echo get_field('home_banner_img')['url'] ?> " alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="services-banner">
        <div class="container">
            <div class="services-banner_wrapper">
            <?php if(have_rows('home_services_repeater')) : while(have_rows('home_services_repeater')) : the_row() ?>
                <div class="services-banner_item">
                    <img src="<?php echo get_sub_field('home_services_item_icon')['url'] ?>" alt="">
                    <div class="services-banner_text">
                        <h4><?php echo get_sub_field('home_services_item_title') ?></h4>
                        <p>
                            <?php echo get_sub_field('home_services_item_text') ?>
                        </p>
                    </div>
                    <div class="services-banner_btn">
                        <button class="yellow_btn" role="button">Get a Quote</button>
                    </div>
                </div>

            <?php
                endwhile;
            else:
                echo 'No Available Content';
            endif;
                wp_reset_postdata();
            ?>
                <!-- <div class="services-banner_item">
                    <img src="./img/home/Graphics.png" alt="">
                    <div class="services-banner_text">
                        <h4>Web Design and Development</h4>
                        <p>Lorem ipsum dolor quam sit amet consectetur 
                            adipisicing elit. Animi ipsam sit distinctio reprehenderit 
                            enim neque amet repellat ipsam rem quam 
                            doloribus.
                        </p>
                    </div>
                    <div class="services-banner_btn">
                        <button class="yellow_btn" role="button">Get a Quote</button>
                    </div>
                </div>
                <div class="services-banner_item">
                    <img src="./img/home/Social Media.png" alt="">
                    <div class="services-banner_text">
                        <h4>Web Design and Development</h4>
                        <p>Lorem ipsum dolor quam sit amet consectetur 
                            adipisicing elit. Animi ipsam sit distinctio reprehenderit 
                            enim neque amet repellat ipsam rem quam 
                            doloribus.
                        </p>
                    </div>
                    <div class="services-banner_btn">
                        <button class="yellow_btn" role="button">Get a Quote</button>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

    <section class="about-banner">
        <div class="container">
            <div class="about-banner_wrapper">
                <div class="about-banner_content">

                    <div class="about-banner_text">
                        <h3><?php echo get_field('home_about_title') ?></h3>
                        <p>
                            <?php echo get_field('home_about_p1') ?>
                        </p>
                        <p>
                            <?php echo get_field('home_about_p2') ?>
                        </p>
                    </div>
                </div>
                <div class="about-banner_img">
                    <img src="<?php echo get_field('home_about_img')['url'] ?>" alt="">
                </div>                
            </div>
        </div>
    </section>

    <section class="updates-banner">
        <div class="container">
            <div class="updates-banner_title">
                <h2><?php echo get_field('home_updates_title') ?></h2>
                <p><?php echo get_field('home_updates_p') ?></p>
            </div>
            <div class="updates-banner_wrapper">
            <?php if(have_rows('home_updates_repeater')) : while(have_rows('home_updates_repeater')) : the_row() ?>
                <div class="updates-banner_item">
                    <img src="<?php echo get_sub_field('home_updates_item_img')['url'] ?>" alt="">
                    <div class="updates-banner_text">
                        <h4><?php echo get_sub_field('home_updates_item_title') ?></h4>
                        <p>
                            <?php echo get_sub_field('home_updates_item_text') ?>
                        </p>
                        <a href="<?php echo get_permalink() ?>">Read More</a>
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
        <div class="container">
            <div class="contact_wrapper">
                <div class="contact_text">
                    <h3><?php echo get_field('home_contact_title') ?></h3>
                    <p>
                        <?php echo get_field('home_contact_p') ?>
                    </p>
                </div>
                <div class="contact_button">
                    <button class="yellow_btn" role="button">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>