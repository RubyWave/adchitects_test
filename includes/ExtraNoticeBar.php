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
        add_action( 'admin_menu', [ $this, 'topNotificationSettingsPage' ] );
    }

    /**
     * Register menu visible in header of the page
     */
    public function topNotificationSettingsPage() {
        add_options_page('Global Custom Fields', 'Global Custom Fields', '8', 'functions', [ $this, 'topNotificationSettingsForm' ]);
        
    }
    public function topNotificationSettingsForm() {
        ?>
        <div class='wrap'>
            <h2><?php echo esc_html__( 'Global Custom Fields', 'learning_palace' ) ?></h2>
            <form method="post" action="options.php">
                <?php wp_nonce_field('update-options') ?>

                <p><strong><?php echo esc_html__( 'Top notification text:', 'learning_palace' ) ?></strong><br />
                <input type="text" name="topnotification" size="45" value="<?php echo get_option('topnotification'); ?>" /></p>

                <p><input type="submit" name="Submit" value="<?php echo esc_html__( 'Update Notification options', 'learning_palace' ) ?>" /></p>

                <input type="hidden" name="action" value="update" />
                <input type="hidden" name="page_options" value="topnotification" />

            </form>
        </div>
        <?php
    }
}