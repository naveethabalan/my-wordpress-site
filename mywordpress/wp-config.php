<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'foodlover' );

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
define( 'AUTH_KEY',         'wk+2hkYcw+6c(;O>(o4;- h1aU~eowtoHa;O{rm,C@v3rDI8J@u(3sAs#E#-#b^8' );
define( 'SECURE_AUTH_KEY',  '_8KDi=U5?+{{PSyj?x9k;y/mWl*G2zX%^DK3v|rK,&.~3I;jO[,fvM4m`YN=9?0h' );
define( 'LOGGED_IN_KEY',    'M7fGUJ`Ir.,2z2pvXPElX}>5q.a<HFiH9:U2@`-LKn6MZ7PNj%^bR2ZQw!N<[0t|' );
define( 'NONCE_KEY',        '?YT_b<Suf/e<:EXluYP-p>!-,:X~?%gGw?|,& mC|rx5)g78#}Ti#5]VQINLX0h}' );
define( 'AUTH_SALT',        'G:4doBXJm*=[XzVZWFE%J{o%5S00>;1*+~J6: u M zVEg_|nL-%BR>7Q]obr-?d' );
define( 'SECURE_AUTH_SALT', 'U^y@[pBJ K6GG:qqCD<]e7{,J+2;gu,h@Q]b%Bdw`$+L[U@s&Hva[sb?@wvsQL*#' );
define( 'LOGGED_IN_SALT',   '2G?a<tM8;,=+ZigW@LD+L>Jg[ t%]PQ|)v#p+60&wTdD#vPNY9P=S[Mq}E&RC#UK' );
define( 'NONCE_SALT',       'LQ2B~O8%c{W*rAIdr<2Hv( }X*V#DvREi-KnOZZ~5,+zn28B!w%Ib&_|,y:>T%~.' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
