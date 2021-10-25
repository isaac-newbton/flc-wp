<?php

$double_cta_section = get_field('double_cta_section');

?>

<?php if(have_rows('double_cta_section')): ?>
    <div class="home-content-container content-container">
        <?php while(have_rows('double_cta_section')): the_row(); $sub_content = get_sub_field('content'); $sub_image = get_sub_field('image'); $sub_title = get_sub_field('title'); $sub_button_text = get_sub_field('button_text'); $sub_button_url = get_sub_field('button_url'); ?>
            <div class="home-double-cta-section">
                <img src="<?=$sub_image?>" alt="" class="background">
                <div class="home-double-cta-section-content-container">
                    <div class="home-double-cta-section-title">
                        <?=$sub_title?>
                    </div>
                    <div class="home-double-cta-section-content">
                        <?=$sub_content?>
                    </div>
                    <div class="home-double-cta-section-button">
                        <a href="<?=$sub_button_url?>" class="link-button"><?=$sub_button_text?></a>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>