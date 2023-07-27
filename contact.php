<?php 
    // Template Name: Contact
?>

<?php get_header() ?>

    <section class="contactp">
        <div class="container">
            <div class="contactp_title">
                <h1><?php echo get_field('contact_title') ?></h1>
            </div>
            <div class="contactp_wrapper">
                <div class="contactp_left">
                    <div class="contactp_left_content">
                        <div class="contactp_left_details">
                            <p>
                                <?php echo get_field('contact_text') ?>
                            </p>
                            <table>
                            <?php if(have_rows('contact_repeater')) : while(have_rows('contact_repeater')) : the_row() ?>
                                <tr>
                                    <td><?php echo get_sub_field('contact_repeater_icon') ?></td>
                                    <td><?php echo get_sub_field('contact_repeater_text') ?></td>
                                </tr>
                                <?php
                                    endwhile;
                                else:
                                    echo 'No Available Content';
                                endif;
                                wp_reset_postdata();
                                ?>
                            </table>
                        </div>
                        <div class="contactp_left_socmed">
                            <ul>
                            <?php if(have_rows('contact_social_repeater')) : while(have_rows('contact_social_repeater')) : the_row() ?>
                                <li><a href="<?php echo get_sub_field('contact_social_link') ?>"><?php echo get_sub_field('contact_social_icon') ?></a></li>
                                <?php
                                    endwhile;
                                else:
                                    echo 'No Available Content';
                                endif;
                                wp_reset_postdata();
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="contactp_right">
                    <div class="contactp_right_item">
                    <?php echo do_shortcode('[contact-form-7 id="21" title="Contact"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer() ?>