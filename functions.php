<?php

/**
 * adds autoloader from composer
 */
if (file_exists( dirname(__FILE__) . '/vendor/autoload.php')) {
    $loader = require_once 'vendor/autoload.php';
} else {
    return;
}

//enable WP managed title tag
add_theme_support( 'title-tag' );

new LearningPalace\EnqueStylesScripts();
new LearningPalace\Menus();
new LearningPalace\Fonts();
new LearningPalace\ExtraNoticeBar();
