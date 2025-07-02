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
define( 'DB_NAME', 'faiha school2' );

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
define( 'AUTH_KEY',         '}iA39D?H6`d`z;%gMCyBCUZv$=V`y_DiPev^uDH.g#`,k:TBKj%V+33|(i8q|wh1' );
define( 'SECURE_AUTH_KEY',  'F?rwNZ{2?}`G2rpqH}I##m.%yRjK:Vbj&O]=b<[o<O/[Enpu{2O6d<*9MFdnaf3Z' );
define( 'LOGGED_IN_KEY',    ')%mf_]5(Wq4q0%D3o1Jdi(ZVwp#~Y]8C7r{q57`4H,{41;&ff*zN(rX<%5bkVe<v' );
define( 'NONCE_KEY',        'i^3_ ?t$+hRB hV[ CFa: HN]|J]OLG_0<c&c OHA?di)p9li}2G5z==]+N|DB^n' );
define( 'AUTH_SALT',        'R1vjSG#.s;@Oxp;y.Q,{G_>*N[J=[S1,)fVLTxeYuAnC M(%_PF3)]&mIB5E%+Oo' );
define( 'SECURE_AUTH_SALT', '/o_CTAHC_QIsOh@C9???&y,s/H17VMd` NIR}8~DR}0 )PtexU1.Y 2Yv#N(8g.b' );
define( 'LOGGED_IN_SALT',   '-&g>o$![AgG3E{XIU$c^yKDOgTVXunDxhw{#c^?c4C)RSPp_@#blSnP*T{E%E.*u' );
define( 'NONCE_SALT',       'x31xcSw<A;h/9d8 LCMS_H%2Z$6*6?7HO?PgE$OA!H#:;&gfRuf01.3mG;rdk/US' );

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
