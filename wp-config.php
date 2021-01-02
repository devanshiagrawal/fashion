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
define( 'DB_NAME', 'fashion' );

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
define( 'AUTH_KEY',         'N-SSjgUCt$-0%XSy`Yzzv!Xg;Ig4U;/f &DhR^:6g3k/Tl{gRTE@+mjM}Mn,NV6r' );
define( 'SECURE_AUTH_KEY',  'OY4B=NUMXy&$@rm!^Ni}OSYPr8YMiZ)8(0MA?Fu`)6_npJVqPHUW)hfJ~_yzCA@M' );
define( 'LOGGED_IN_KEY',    'iGo3 dyN)bolXHCR4KS@rkkhBu|wAVp{N~/K(`6rdl/tD=Mk,U[`ey9$EAg>,z:j' );
define( 'NONCE_KEY',        'D;AQ%|eXhEi6jw)Myd1#.+=eW&@WdBRg3H2_Xk:T*F+KW=(~f55?IcxlO<.s5/_2' );
define( 'AUTH_SALT',        'a~7#%)ck!{D#D,HDkKZY&>(8/@Kc^Wmo,.&Sob&]O&jVur dD<5G`GKVWqtjLGEQ' );
define( 'SECURE_AUTH_SALT', 'c(G{WQx@S08FINqmB4FM)-cB/_d<D_z%UwNc&3N%tJOMu.3D<TlAPd>d1@}HNf[o' );
define( 'LOGGED_IN_SALT',   'B=yKbI`$mZ*&lJ9Vp0gNFLD=.)&L:BE[|+Y^/!~7&Bq/Z!~y>k3rOFtd?fG@E`wY' );
define( 'NONCE_SALT',       'rd1nL@Q`uFu|Z#W1yz9@7hWr@d+FrA{Ir$~Cy{Fh3#f5_z@o5JTb%b:nz{8]CdP7' );

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
