<?php
use LearningPalace\Menus;

$themeUrl = wp_normalize_path( get_stylesheet_directory_uri() );
$notificationText = get_option('topnotification');
?>

<header class="page-header <?php if($notificationText == '') echo 'extra-info-hidden' ?>">
    <?php if($notificationText == ''): ?>
        <div class="extra-notification">
            <div class="container">
                <p class="extra-notification-text"><?php echo get_option('topnotification'); ?></p>
                <img class="extra-notification-close" src="<?php echo $themeUrl; ?>/img/close.svg">
            </div>
        </div>
    <?php endif; ?>
    
    <div class="container main-header-container">
        <a href="<?php echo get_home_url(); ?>" class="page-logo">
            <img class="" src="<?php echo $themeUrl; ?>/img/logo@2x.svg">
        </a>
        <nav id="nav">
            <?php wp_nav_menu(array(
                'theme_location' => Menus::MENU_LOCATION,
                'container' => '',
            )); ?>
        </nav>
        <a href="#" class="user-login">
            <img class="" src="<?php echo $themeUrl; ?>/img/user.svg">
        </a>
    </div>
</header>