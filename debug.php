<?php

/**
 * @package Console Log
 */
/*
Plugin Name: Console Log
Plugin URI: http://polytechnicstl.com/2013/02/php-debugging/
Description: Adds a simple function for logging php data to the developers console
Version: 0.0.1
Author: Dustin Fadler
Author URI: http://dfadler.com
License: MIT
*/

function console_log( $data ) {

    if ( !is_string( $data ) ) {
        $data = json_encode( $data );
        echo "<script>console.dir($data)</script>";
    } else {
        echo "<script>console.log('$data')</script>";
    }

}