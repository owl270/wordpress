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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', "proshopp" );

/** Database username */
define( 'DB_USER', "root" );

/** Database password */
define( 'DB_PASSWORD', "" );

/** Database hostname */
define( 'DB_HOST', "localhost" );

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
define( 'AUTH_KEY',         'onS}cAK>5N^T;eM*11:FqDZb00fD6w I-V;CIXNfumqITgKs:oB025fumrvuY2fp' );
define( 'SECURE_AUTH_KEY',  '/?^:<|5C_DvyIGeM-%&hk{HkfR%yh3v3Zq8s:%e3+.Y$byOd$aDdYU|efL<z%[b|' );
define( 'LOGGED_IN_KEY',    '7?cA87BJI/H(t%pehlCx+*qFk:/(ZDOxF7cUHR:-q|@4Sy#PTSMapMmr 2HNQoLZ' );
define( 'NONCE_KEY',        ']-C^Kh/2PLfv*8:J1DrsKNtE:LgSrOtSpy4Nl-IeSQ)12*HC0jeKSU8hq*}7p|7P' );
define( 'AUTH_SALT',        'h)1#0&D7:!EwzcY,arNo7kQ<ClLh6$PYce=@)uv<.8PiF<`wzYDRHSH&?:0%l&0o' );
define( 'SECURE_AUTH_SALT', ')%26`._]4nY$lq_l~iWS?UD`^rbr]4_kJ 7pn+!RbSQOZ=DWBlY@$d$|*mp&TVK<' );
define( 'LOGGED_IN_SALT',   'pYt_Q?xS}{~nH7/u2uSRT)x,Xk.Mk)-PMp=>4ESYo&F<rQ(Y1VsU=uPp}EEBo}o}' );
define( 'NONCE_SALT',       'la9$5v-ph:f-#>mF}[}(hqx+!EMq4.Y>T>8`%++f.{K1ss[3W%{{@%,y5z5_4z*&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_SITEURL', 'http://localhost/shoppo/' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
