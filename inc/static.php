<?php 
/** 
 * Static 
 */

if( ! function_exists( 'bee_enqueue_scripts' ) ) {
    /** 
     * Enqueue script fontend
     */
    function bee_enqueue_scripts () {
        wp_enqueue_script( 'be-elementor', BEE_URI . 'dist/be-elementor.bundle.js', [ 'jquery' ], BEE_VER, true );
        wp_localize_script( 'be-elementor', 'php_data', [
            'admin_ajax' => admin_url( 'admin-ajax.php' ),
        ] );
    }

    add_action( 'wp_enqueue_scripts', 'bee_enqueue_scripts' );
}