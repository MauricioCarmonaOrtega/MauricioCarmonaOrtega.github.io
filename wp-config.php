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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_portaf' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '-?|r4Om{tz}X5+%3^an^Iory1:g{G2AwV6sEI:;7Y181pzedjGL!t [ATRf+UG}y' );
define( 'SECURE_AUTH_KEY',  '?fHUWz(&r5N=?Vh29s4m?#pVi4QwvXq+L2JMy#k; (GhnHcsod*jf756yTWZ`-c.' );
define( 'LOGGED_IN_KEY',    't~<Zj`zVk2IVz?A%IZ|2ATf]^WWi3KZ2y>^RvL3+ 6_BWVF^$!cu47/t7&ajjh&9' );
define( 'NONCE_KEY',        '/?Gjn2r~r2^ep/{c4![.3f?}{$16H1s8m!t|;oyRacqGc&~|-WS0XQx;0$X r|q#' );
define( 'AUTH_SALT',        '|*kC@i|;)sibNL.(toxXjNB2IFAeb ,MByn<Q:<l tJCF|fm4J|rAkDEI6_fcGpB' );
define( 'SECURE_AUTH_SALT', ' ~LW)<oC:q|U{w|-E1B^?>n9>(,:DI)y$^~ZeHq?{??ZDUKfxkNuT/8E;cnUqLMX' );
define( 'LOGGED_IN_SALT',   'ctGznZW]G~!))4@BX5O*=@>z!@l7N]bF}QiIH{;:-:)mEz/|=XXhENed~,*s[8.S' );
define( 'NONCE_SALT',       '2z0cA7h9CG/UEs?tG$|YiTb2^UxeLj[Qf96O[_OlZ;%}bc~IhMbkPL14M#^(+4qH' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
