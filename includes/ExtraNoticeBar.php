<?php 

namespace LearningPalace;

/**
 * Adding meta custom field to 
 */
class ExtraNoticeBar {

    /**
     * Constructor
     */
    public function __construct() {
        add_action( 'after_setup_theme', [ $this, 'registerMainMenu' ] );
    }

    /**
     * Register menu visible in header of the page
     */
    public function registerMainMenu() {
        register_nav_menus( array(
            self::MENU_LOCATION => esc_html__( 'Main menu', 'learning_palace' ),
        ));
    }
}