<?php
/**
 * The base configuration for WordPress - SiBambu Web
 *
 * Configured for local Laragon/XAMPP environment and production readiness.
 */

// ** Database settings - Default Laragon configuration ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sibambu_wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         '6b9f2d1e8c7a4b0d5e3f1a2b3c4d5e6f7a8b9c0d1e2f3a4b5c6d7e8f9a0b1c2d' );
define( 'SECURE_AUTH_KEY',  '1a2b3c4d5e6f7a8b9c0d1e2f3a4b5c6d7e8f9a0b1c2d3e4f5a6b7c8d9e0f1a2b' );
define( 'LOGGED_IN_KEY',    'f0e1d2c3b4a59876543210fedcba9876543210abcdef0123456789abcdef0123' );
define( 'NONCE_KEY',        '4b5c6d7e8f9a0b1c2d3e4f5a6b7c8d9e0f1a2b3c4d5e6f7a8b9c0d1e2f3a4b5c' );
define( 'AUTH_SALT',        '9876543210fedcba0123456789abcdef1a2b3c4d5e6f7a8b9c0d1e2f3a4b5c6d' );
define( 'SECURE_AUTH_SALT', 'abcdef0123456789fedcba98765432101a2b3c4d5e6f7a8b9c0d1e2f3a4b5c6d' );
define( 'LOGGED_IN_SALT',   '1e2f3a4b5c6d7e8f9a0b1c2d3e4f5a6b7c8d9e0f1a2b3c4d5e6f7a8b9c0d1e2f' );
define( 'NONCE_SALT',       'f9e8d7c6b5a43210abcdef01234567891a2b3c4d5e6f7a8b9c0d1e2f3a4b5c6d' );
/**#@-*/

/**
 * WordPress database table prefix.
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
