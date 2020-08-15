/** 
 * Common JS
 */

;( function( w, $ ) {
    'use strict'

    const owlInit = () => {
        $( '.owl-carousel' ).owlCarousel();
    }

    /** 
     * DOM Ready
     */
    $( () => {

        // Call owlCarousel
        // owlInit()
    } )

} )( window, jQuery )