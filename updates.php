<?php
    // Template Name: Updates
?>

<?php get_header() ?>

    <section class="latest">
        <div class="container">
            <div class="latest_title">
                <h1><?php echo get_field('updates_title') ?></h1>
                <p>
                    <?php echo get_field('updates_text') ?>
                </p>
            </div>
            <div class="latest_wrapper">
                <div class="latest_left">
                <?php if(have_rows('updates_left_repeater')) : while(have_rows('updates_left_repeater')) : the_row() ?>
                    <div class="latest_left_item">
                        <img src="<?php echo get_sub_field('left_item_img')['url'] ?>" alt="">
                        <div class="latest_left_item_label">
                            <ul>
                            <?php if(have_rows('left_item_label_repeater')) : while(have_rows('left_item_label_repeater')) : the_row() ?>
                                <li><?php echo get_sub_field('label_repeater_icon') ?><?php echo get_sub_field('label_repeater_name') ?></li>
                                <?php
                                    endwhile;
                                else:
                                    echo 'No Available Content';
                                endif;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                        <div class="latest_left_item_text">
                            <h2><?php echo get_sub_field('left_item_header') ?></h2>
                            <p>
                                <?php echo get_sub_field('left_item_text') ?>
                            </p>
                            <a href="<?php echo get_permalink() ?>">Read more...</a>
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

                <div class="latest_right">
                    <div class="latest_right_item">
                        <h2>CATEGORIES</h2>
                        <table>
                            <tr>
                                <td>Web Design</td>
                                <td>(2)</td>
                            </tr>
                        </table>
                    </div>

                    <div class="latest_right_recent">
                        <div class="latest_right_recent_title">
                            <h2>RECENT POST</h2>
                        </div>
                        <div class="latest_right_recent_content">
                            <div class="latest_right_recent_img">
                                <img src="./img/updates/unsplash_Im7lZjxeLhg.png" alt="">
                            </div>
                            <div class="latest_right_recent_text">
                                <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                                <h5><?php echo get_the_date('M d Y') ?></h5>
                            </div>
                        </div>
                    </div>

                    <div class="latest_right_tags">
                        <div class="latest_right_tags_title">
                            <h2>TAGS</h2>
                        </div>
                        <div class="latest_right_tags_wrapper">
                            <div class="latest_right_tags_group">
                                <ul>
                                    <li><a href="" class="btn bg--light">WEB DESIGN</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="contact_wrapper">
                <div class="contact_text">
                    <h3>Feel free to talk to us about your Projects</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="contact_button">
                    <button class="yellow_btn" role="button">Contact Us</button>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>