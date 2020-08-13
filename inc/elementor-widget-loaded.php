<?php 
/**
 * Elementor widget loaded
 */

class BeElementorWidgetLoaded {

    private static $_instance = null;

    public static function instance() {
		if ( is_null( self::$_instance ) ) {
			self::$_instance = new self();
		}
		return self::$_instance;
	}

    public function __construct () {
        add_action( 'elementor/elements/categories_registered', [ $this, 'register_categories' ] );
        add_action( 'elementor/widgets/widgets_registered', [ $this, 'load_widgets' ] );
    }

    public function register_categories ( $elements_manager ) {

        $elements_manager->add_category(
            'be-elementor-category',
            [
                'title' => __( 'Be Elementor', 'be-elementor' ),
                'icon' => 'fa fa-plug',
            ]
        );
    }

    public function get_widget_directories () {
        return glob( BE_ELEMENTOR_DIR . 'widgets/*' , GLOB_ONLYDIR );
    }

    public function load_widgets () {
        $wg_directories = $this->get_widget_directories();
        if( count( $wg_directories ) <= 0 ) return;

        foreach( $wg_directories as $index => $dir ) {
            if( ! file_exists( $dir . '/widget.php' ) ) continue;
            require( $dir . '/widget.php' );
        }
    }
}

BeElementorWidgetLoaded::instance();
