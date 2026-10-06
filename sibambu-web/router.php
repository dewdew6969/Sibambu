<?php
/**
 * PHP Built-in Server Router for WordPress
 */
$path = parse_url( $_SERVER['REQUEST_URI'], PHP_URL_PATH );
$file = __DIR__ . $path;

// If file exists (e.g. css, js, pdf, images), serve directly
if ( $path !== '/' && file_exists( $file ) && ! is_dir( $file ) ) {
    return false;
}

// Otherwise route through WordPress index.php
$_SERVER['SCRIPT_NAME'] = '/index.php';
require_once __DIR__ . '/index.php';
