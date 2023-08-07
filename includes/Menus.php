<?php 

namespace LearningPalace;

/**
 * Enquing all styles and all scripts
 */
class Menus {

    const MENU_LOCATION = 'krove_menu';
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