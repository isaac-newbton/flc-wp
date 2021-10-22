<ul class="social-list">
    <?php if($contactUrl = get_option('aca_contact_url')): ?>
        <li>
            <a href="<?=esc_attr($contactUrl)?>" title="Contact Us">
                <i class="fas fa-envelope-square"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if($fbUrl = get_option('aca_facebook_profile_url')): ?>
        <li>
            <a href="<?=esc_attr($fbUrl)?>" title="Facebook">
                <i class="fab fa-facebook-square"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if($liUrl = get_option('aca_linkedin_profile_url')): ?>
        <li>
            <a href="<?=esc_attr($liUrl)?>" title="Linkedin">
                <i class="fab fa-linkedin"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if($inUrl = get_option('aca_instagram_profile_url')): ?>
        <li>
            <a href="<?=esc_attr($inUrl)?>" title="Instagram">
                <i class="fab fa-instagram-square"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if($ytUrl = get_option('aca_youtube_profile_url')): ?>
        <li>
            <a href="<?=esc_attr($ytUrl)?>" title="Youtube">
                <i class="fab fa-youtube-square"></i>
            </a>
        </li>
    <?php endif; ?>
</ul>