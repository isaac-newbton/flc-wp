<?php

/**
 * Template Name: Homepage
 */

get_header();

$header_content = get_field('header_content');
$header_background = get_field('header_background');
$callout_boxes_title = get_field('callout_boxes_title');
$callout_boxes = get_field('callout_boxes');
$after_content_ctas = get_field('after_content_ctas');
$double_cta_section = get_field('double_cta_section');
$resources_title = get_field('resources_title');
$resources_intro_copy = get_field('resources_intro_copy');
$resources_button_text = get_field('resources_button_text');
$resources_button_url = get_field('resources_button_url');
$resources_items = get_field('resources_items');
$home_end_blocks = get_field('home_end_blocks');

?>

<div class="home-banner-wrapper parallax-window" data-parallax="scroll" data-speed="0.75" data-image-src="<?=$header_background?>">
    <div class="home-banner-container content-container">
        <div class="home-banner-content">
            <?=$header_content?>
        </div>
    </div>
</div>

<div class="home-callouts-container home-content-container">
    <h2><?=$callout_boxes_title?></h2>
    <ul class="home-callout-boxes">
        <?php if(have_rows('callout_boxes')): while(have_rows('callout_boxes')): the_row(); ?>
            <?php get_template_part('template-parts/home/home-callout-box'); ?>
        <?php endwhile; endif; ?>
    </ul>
</div>

<div class="home-post-content-container home-content-container">
    <?php get_template_part('template-parts/site/leaf-divider'); ?>
    <?php the_content(); ?>
</div>

<div class="home-after-content-ctas-container home-content-container">
    <ul class="home-after-content-ctas">
        <?php if(have_rows('after_content_ctas')): while(have_rows('after_content_ctas')): the_row(); ?>
            <?php get_template_part('template-parts/home/home-cta-icon'); ?>
        <?php endwhile; endif; ?>
    </ul>
</div>

<div class="home-double-cta-container">
    <?php get_template_part('template-parts/home/home-double-cta-section'); ?>
</div>

<div class="home-bottom-content-blocks-container home-content-container">
    <?php get_template_part('template-parts/home/home-bottom-blocks'); ?>
</div>

<?php

get_footer();
