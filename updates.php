<?php
    // Template Name: Updates
?>

<?php get_header() ?>

    <section class="latest">
        <div class="container">
            <div class="latest_title">
                <h1><?php echo get_field('updates_title') ?></h1>
                <p><?php echo get_field('updates_text') ?></p>
            </div>
            <div class="latest_wrapper">
                <div class="latest_left">
                    <?php if(have_rows('updates_left_repeater')) : while(have_rows('updates_left_repeater')) : the_row() ?>
                    <div class="latest_left_item">
                        <img src="<?php echo get_sub_field('left_item_img') ?>" alt="">
                        <div class="latest_left_item_label">
                            <ul>
                            <?php if(have_rows('left_item_label_repeater')) : while(have_rows('left_item_label_repeater')) : the_row() ?>
                                <li><i class="fa-solid fa-user"></i><?php echo get_sub_field('label_repeater_name') ?></li>
                                <?php
                                    endwhile;
                                else:
                                    echo 'No Available Content';
                                endif;
                                wp_reset_postdata();
                                ?>
                                <!-- <li><i class="fa-solid fa-calendar-days"></i>March 21, 2022</li>
                                <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li> -->
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
                    <!-- <div class="latest_left_item">
                        <img src="./img/updates/unsplash_FVgECvTjlBQ.png" alt="">
                        <div class="latest_left_item_label">
                            <ul>
                                <li><i class="fa-solid fa-user"></i>Roy Balaaldia</li>
                                <li><i class="fa-solid fa-calendar-days"></i>March 21, 2022</li>
                                <li><i class="fa-solid fa-tags"></i>Web Design | Wire Frame</li>
                            </ul>
                        </div>
                        <div class="latest_left_item_text">
                            <h2>Designing Concept</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                                Ad itaque doloribus aspernatur deserunt quisquam? Saepe 
                                laborum dolores odit provident vero, modi corrupti deserunt, 
                                cumque unde sit libero vel ipsum ipsam?
                            </p>
                            <a href="">Read more...</a>
                        </div>
                    </div> -->
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
                        <h2><?php echo get_field('category_title') ?></h2>
                        <table>
                            <?php if(have_rows('category_repeater')) : while(have_rows('category_repeater')) : the_row() ?>
                            <tr>
                                <td><?php echo get_sub_field('category_name') ?></td>
                                <td><?php echo get_field('category_num') ?></td>
                            </tr>
                            <?php
                                endwhile;
                            else:
                                echo 'No Available Content';
                            endif;
                            wp_reset_postdata();
                            ?>
                            <!-- <tr>
                                <td>Web Development</td>
                                <td>(5)</td>
                            </tr>
                            <tr>
                                <td>Wire Frame</td>
                                <td>(1)</td>
                            </tr>
                            <tr>
                                <td>Vector & Logo</td>
                                <td>(5)</td>
                            </tr>
                            <tr>
                                <td>Social Media</td>
                                <td>(2)</td>
                            </tr> -->
                        </table>
                    </div>

                    <div class="latest_right_recent">
                        <div class="latest_right_recent_title">
                            <h2><?php echo get_field('recent_title') ?></h2>
                        </div>
                        <div>
                        <?php if(have_rows('recent_repeater')) : while(have_rows('recent_repeater')) : the_row() ?>
                            <div class="latest_right_recent_content">
                                <div class="latest_right_recent_img">
                                    <img src="<?php echo get_sub_field('recent_img') ?>" alt="">
                                </div>
                                <div class="latest_right_recent_text">
                                    <h3><?php echo get_sub_field('recent_header') ?></h3>
                                    <h5><?php echo get_the_date('M d Y') ?></h5>
                                </div>
                            </div>
                            <?php
                                endwhile;
                            else:
                                echo 'No Available Content';
                            endif;
                            wp_reset_postdata();
                            ?>
                            <!-- <div class="latest_right_recent_content">
                                <div class="latest_right_recent_img">
                                    <img src="./img/updates/unsplash_MxVkWPiJALs.png" alt="">
                                </div>
                                <div class="latest_right_recent_text">
                                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                                    <h5>March 21, 2023</h5>
                                </div>
                            </div>
                            <div class="latest_right_recent_content">
                                <div class="latest_right_recent_img">
                                    <img src="./img/updates/unsplash_OqtafYT5kTw.png" alt="">
                                </div>
                                <div class="latest_right_recent_text">
                                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
                                    <h5>March 21, 2023</h5>
                                </div>
                            </div> -->
                        </div>
                    </div>

                    <div class="latest_right_tags">
                        <div class="latest_right_tags_title">
                            <h2><?php echo get_field('tags_title') ?></h2>
                        </div>
                        <div class="latest_right_tags_wrapper">
                            <div class="latest_right_tags_group">
                                <ul>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn bg--light">WEB DESIGN</a></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn bg--light">WIRE FRAME</a></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="active btn bg--light">WEB DEVELOPMENT</a></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn bg--light">LOGO</a></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn bg--light">VECTOR</a></li>
                                    <li><a href="<?php echo get_permalink() ?>" class="btn bg--light">SOCIAL MEDIA</a></li>
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