<?php

$resources_title = get_field('resources_title');
$resources_intro_copy = get_field('resources_intro_copy');
$resources_button_text = get_field('resources_button_text');
$resources_button_url = get_field('resources_button_url');
$resources_items = get_field('resources_items');
$home_end_blocks = get_field('home_end_blocks');

?>

<div class="home-bottom-block home-resources-block">
    <h2><?=$resources_title?></h2>
    <p><?=$resources_intro_copy?></p>
    <div class="callout-button">
        <a href="<?=$resources_button_url?>" class="link-button"><?=$resources_button_text?></a>
    </div>
    <?php if(have_rows('resources_items')): ?>
        <ul class="home-resources">
            <?php while(have_rows('resources_items')): the_row(); $sub_content = get_sub_field('content'); $sub_image = get_sub_field('image'); $sub_title = get_sub_field('title'); $sub_button_text = get_sub_field('button_text'); $sub_button_url = get_sub_field('button_url'); ?>
                <li>
                    <div class="resource-image-container">
                        <img src="<?=$sub_image?>" alt="<?=$sub_title?>">
                    </div>
                    <div class="resource-content-container">
                        <h3><?=strip_tags($sub_title)?></h3>
                        <a href="<?=$sub_button_url?>" class="link-button"><?=$sub_button_text?></a>
                    </div>
                </li>
            <?php endwhile; ?>
        </ul>
    <?php endif; ?>
</div>

<?php if(have_rows('home_end_blocks')): while(have_rows('home_end_blocks')): the_row(); $sub_content = get_sub_field('content'); ?>
    <div class="home-bottom-block">
        <?=$sub_content?>
    </div>
<?php endwhile; endif; ?>