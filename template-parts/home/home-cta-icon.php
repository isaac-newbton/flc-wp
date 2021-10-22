<?php
    $sub_icon = get_sub_field('icon');
    $sub_content = get_sub_field('content');
    $sub_button_text = get_sub_field('button_text');
    $sub_button_url = get_sub_field('button_url');
?>

<li>
    <div class="cta-icon">
        <img src="<?=$sub_icon?>" alt="<?=$sub_content?>">
    </div>
    <div class="cta-content">
        <?=$sub_content?>
    </div>
    <div class="cta-button">
        <a href="<?=$sub_button_url?>" class="link-button"><?=$sub_button_text?></a>
    </div>
</li>