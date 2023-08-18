<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'uu4gDcDy2Md4NmR2B3cnx7cAJGiDbZlPViQuRWLLih2Y+xmjjuGcshkn/zHk3iaszGT6uUE/kpAB76q42iHNgQ==');
define('SECURE_AUTH_KEY',  'wa0xgley3FNCNz1bQ9jYmxOBf5tdRBvZUvV75a9fHTn7XhkkhSL+TbeuJnRtlwbchyPaADu6OUBVPeqjMuUwZw==');
define('LOGGED_IN_KEY',    'nHL3NTAkantxhRReGxGQ2qRhQnZFOytZz3zoQOHsFDksA5EtFWDTpSSacB5gla6Xzx2bSF95FUoJTbo2dXE0Cg==');
define('NONCE_KEY',        '9c6n50NH8cAMTiVWPG4qaCwCvacfBKKaTJQA7T6so/+sIYN7YIRwtpy5f5wujod4pznqPc+FrrcCrxpcgQ3k6A==');
define('AUTH_SALT',        '3sEE56tkOcEwXPiQwqqecHvDBRy07RhB8W9AdIXcJCBTO2q8PRG0EzZ8iMI1EQhfcWaGYlXJCUlz4o0MBYwzWQ==');
define('SECURE_AUTH_SALT', 'TKGVXn9s0PlwSeZbDMu3a2ATNPrx8CPPKX5qDD4nQ5CW6C/Oba/NfXd0fi1XT/JTo+PYmPFUZTPDMVaXs7ZRcw==');
define('LOGGED_IN_SALT',   'UcEC5vW/VYPoxv5QkwRyxdtKNPN6EblBmpr0BIovd/JLurXcaoMOI88UaH1GR3oEEnRIlAQ8CyE9RxAImrFSQw==');
define('NONCE_SALT',       'ZnmAtbY6Tul68vnwXbhcrc2TWOzyvDHSSUtBAMnJa/zXq7iP+u9DHKia9VVBqdN3VGahuuO3CzooeIP6QhmuYQ==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
