<?php

get_header();

$banner = get_field('banner_image');
$hide_banner = get_field('_hide_banner');

?>

<?php if($banner && !$hide_banner): ?>
<div class="page-banner-wrapper parallax-window" data-parallax="scroll" data-speed="0.75" data-image-src="<?=$banner?>">
    <div class="content-container">
        <div class="page-banner-container">
            <div class="page-banner-content">
                <h1><?=get_the_title()?></h1>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<div class="content-sidebar-container">
	<div class="content-container">
        <?php if(!$banner || $hide_banner): ?>
            <h1 class="page-title"><?=get_the_title()?></h1>
        <?php endif; ?>
		<?php
			the_content();
		?>
	</div>

	<?php get_sidebar('primary'); ?>

</div>

<?php

get_footer();
