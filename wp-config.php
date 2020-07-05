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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'data_cquence' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '0,KKjI:VBe1iw!p)F:;B>DUXmtETZZpOE;a;L$x/UhbuxxMjKY+T{hJ,*#/`Tv6k' );
define( 'SECURE_AUTH_KEY',  '  0.ckS4QZLzoOzCdj=X(lLc*SD`*7`68_Me]1HqaiGjhZJ*3JY7mV_J-q8|?Ipi' );
define( 'LOGGED_IN_KEY',    'WEo1[=FXELer_f@f8pUzo6vhfZa+.V=N=!`ldPO1PQ2e};]-f$c0bZoO9(eXtL0=' );
define( 'NONCE_KEY',        'hTXB6!I:FpYw0N:W~VY?TfHl64g[Eq*x;OF~ol:h7Ba?fn%AdWk)lzV.k%Lj_9f<' );
define( 'AUTH_SALT',        'wI[#!}PyQrv-#ek4@9s.$#z<?[&QnHq[!SUS8I|phSPg[_BgC::c+YhH;=3qKY52' );
define( 'SECURE_AUTH_SALT', 'VzH%Fx{3N5]<er.z2JO<^r~/%)ajx=b0Vud0Yp.wECfh@o]I)W%=s=@KYr{4t?8$' );
define( 'LOGGED_IN_SALT',   '43I{(Q-&a1[o$T&%G.28FE2o:R8yVu51NeoI3 >9.~K6mFhj}K`4./<kCrxV&r!o' );
define( 'NONCE_SALT',       'ZA&8.xwQ}!.VA5FS<mnj93K4T{ cU#$)^a/r4v$scyB-QW<}Z5c4,x92LO;qUOB5' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
