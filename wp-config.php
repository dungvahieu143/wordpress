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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ckFU5 0./};D:y,niN3SdxM*^[pm!LV@P]2#([qYU nC1SH%6S$ORBgI{0/^an4g' );
define( 'SECURE_AUTH_KEY',  'e&wiS<9v3OO_,u8?~J|a5%<dxR?s~812k1W^A4HB)V<wE]cV%w~R;2f-:SoNBTZY' );
define( 'LOGGED_IN_KEY',    '6A@jb@-WjEx XFsBu2x>4ZQn;$N}-X%I-LQ6ZO]C$@=A[MyF<VceQZ05CV GS~!s' );
define( 'NONCE_KEY',        '-^M%y/ZA-z=QmFO_8#(RY$tQ2f$2?!h8+0r?DWVo!X~1-i[JH&O|.))4^gPo~- l' );
define( 'AUTH_SALT',        'x56,c|A~`5^A>u>xMqaiM_#%Skd%BiCX4CwBdnz5_nhN^@x_7xK|`phO9#u8q{]M' );
define( 'SECURE_AUTH_SALT', '2YP#$v3&v,6+sN^!09B~b6kHOuI*:gk*442B}.t8k,[WqOhfqF+I~2E(c$yRICr2' );
define( 'LOGGED_IN_SALT',   '1}eZ5TNErXR/+tMZUupauQ.%L^^b4Jc:hDXMvlE6M}=q`y-8IN mVkBdqeC:K+$h' );
define( 'NONCE_SALT',       '7[eWl51RcNKv/$,=}?q2]#8z*V/;(>P_W*Z&:,KC;=k$5,b`@pus7O~Ncy75qpwp' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
