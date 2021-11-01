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
define( 'DB_NAME', 'webiz' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p9MtqO7g5t2Mn8m5XXdatg==' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ' 6Irii;9[=9Lg/~x8pG!608fTR81c@l6sg`NP;hRd*^tA*PVVA<9=07%g@7NOd2u' );
define( 'SECURE_AUTH_KEY',  'MFf/>MCqAWaUaL|2{`pMna!`q_h TZ5wSM[8DR&3J<w7Tg+eg]q)PM2g=_%,iS{)' );
define( 'LOGGED_IN_KEY',    '|o.yn]rVn1ikg%TB,ANc,Q9VUXR+w CoJ[9`<nR7>sAZ!SsBGUxb$c6D~{;7/w%P' );
define( 'NONCE_KEY',        'qwA0LmQz/ry+kYBYzFH]9V-^m_yQud%rk8-+X&|rs;`p`Uz{c<x2>mYl9c1GK)&I' );
define( 'AUTH_SALT',        'b|kNA)Jf5XJcTys 4cR)!Q}[,lNOV;CbviAhfrZ@%UnM2e)I?pGE^^;$*`fWrV`$' );
define( 'SECURE_AUTH_SALT', ']q$,<D_B]G!bXD.p^0MO<9Yb2RhSD|V76<)ySER7Rk0QaJM5K]CxCN&MR{~yrOW3' );
define( 'LOGGED_IN_SALT',   'NI:p2NXYt7sAUg3s~XMNdgK.6y>!By=UD,!;_4_:[yj=s Rv/ptc^{lG-kN&Qx1N' );
define( 'NONCE_SALT',       '_1X-#Pk-r=nknL=k>8vLOO)CQ}ltUn0o#I(&Dw*YIEQ{Q3|73L$x!~{#bg>7tS$-' );

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
