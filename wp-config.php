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
define( 'DB_NAME', 'wp_test' );

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
define( 'AUTH_KEY',         ',98l+?-#f(B|zsPIgw(6>>*~jIBb74]lObfitH0w-13X4J J9?lGuk 9{KS/9!Ax' );
define( 'SECURE_AUTH_KEY',  '`i-v?h%+OtXgA+EfAN7tZVT;UGo+<Lyp`kOU22tw8g6E[ngteSTb5^%r4%/IaNI?' );
define( 'LOGGED_IN_KEY',    'v(dE/0]DzN)a_q#+r3 E<Br$!Mv<g?1Xu&ln9W/$zPG01vK$&Jwqajo@0uR#<,uO' );
define( 'NONCE_KEY',        'oB95-#+WQL0WT72+;zk}%er,oo)=f!1=j6mP uF_F.,mF,3>D deU;6_F/}/8FbX' );
define( 'AUTH_SALT',        'LTB;7dVLC|^<Uy*H%i~%B~W|1R8pfa?Oy>al!f_p8vg9*1`-7|z/1p}l7,J9/E;6' );
define( 'SECURE_AUTH_SALT', '`EL[zM:gPH<!do(W1N:|6%n3s.~4<=/U_Wq%!@c$zI/* {]Tbs|7C%91|T[X9RZU' );
define( 'LOGGED_IN_SALT',   'dobB&FcDC3npypkD(OQ0FL+]NzE=u;FVM$<;sp!9n<)h8LyTN<;cF@eHO_[CJo9u' );
define( 'NONCE_SALT',       'c[2G*}tVW,45cQvQJhMs.TW^+%[?b,eAfX~7E(>8V<,H>G-z)T5c5yjH OQ(j1(B' );

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
