<?php


/**
 * Custom Helper Functions File
 */

if ( ! function_exists( 'images_path' ) ) {
    /**
     * Returns full images path - images are uploaded in the back office application
     *
     * @param $image
     *
     * @return string
     */
    function images_path( $image) {
        if ( ! empty( $image ) ) {
            return env('APP_URL') . '/public/' . $image;
        }
    }
}
