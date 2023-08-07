<?php
use LearningPalace\Menus;

?>

<header class="page-header">
    <div class="container">
        <a href="<?php echo get_home_url(); ?>" class="page-logo">
            <img class="" src="<?php echo wp_normalize_path( get_stylesheet_directory_uri() ); ?>/img/logo@2x.svg">
        </a>
        <nav id="nav">
            <?php wp_nav_menu(array(
                'theme_location' => Menus::MENU_LOCATION,
                'container' => '',
            )); ?>
        </nav>
        <a href="#" class="user-login">
            <img class="" src="<?php echo wp_normalize_path( get_stylesheet_directory_uri() ); ?>/img/user.svg">
        </a>
    </div>
</header>