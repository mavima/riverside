<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O8qp0mohDzokWVOz29piH3BusfCgknxhkHFDs8wMZ5e7n7J85gwtofvlU5MTbYjNN/TkElhZvAzFPFRgzB3/kw==');
define('SECURE_AUTH_KEY',  'ktHJBePy0lRHTCC1LGrb2XcSY/MStYvKClBXRc6yPIz6K+tHOgg0oJX9QIsWWDXHwuy+U0bAT9nLGAs7YVQr+A==');
define('LOGGED_IN_KEY',    '4hyaBHNLGEDCrWaxncLU6uxi9PElZ13euwHnNmHHlHh027SDUCA5BtCghckL+2HD+QBPM+dFwJq99ynLGiKJbw==');
define('NONCE_KEY',        'FRBGpMXUPG5/iSQSrgX5y7afJJttx/syzKWqiQVxK8yACZN6rxz4UzpeR/xBBDCndzFnKp6CH5xFfY5vD3JILg==');
define('AUTH_SALT',        'm97YMRmKjSdguBO6qCq2x7TryrjIC1KPHYlT4Qn3iDAvXz6M2N1qd2/Msq4WqCDVK9wmqbmL/Z03GECPQYWJzw==');
define('SECURE_AUTH_SALT', 'OLvvCscc92dvsyclplLRUD8tv+X23jxfDlaF34giRyHilmsdRTj7sHgeV5ozKSkIOOFHDs7olw3LCqY+EJtt4A==');
define('LOGGED_IN_SALT',   'wbrLSdduMD5vaAx/ZogA64XiIZo4gCUbc1RRT55xakt/Z7YJkzkz66cqZR+a+9HWIgS3S40PxpFCWRXmx7t7zA==');
define('NONCE_SALT',       'bfCANfsg2lv0iyEoVtC6cDBQ2iK/dvChzBw0SBtM1v1Fd8w2V1hpzrCeLcm8WLNzVC2zHr+b/0lelUcmPucurg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
