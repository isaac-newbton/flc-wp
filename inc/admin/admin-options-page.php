<h1>Theme Options</h1>
<?php settings_errors(); ?>
<form action="options.php" method="post">
    <?php settings_fields('aca-settings'); ?>
    <?php do_settings_sections('aca_flc'); ?>
    <?php submit_button(); ?>
</form>