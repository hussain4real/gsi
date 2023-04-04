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
define( 'AUTH_KEY',         '}Py:+H*:* G+h)Lh/[55{YEsFAouiC1KwO%XN%cG9SjZ.R5s>e{cP Lxc7zZ,6/,' );
define( 'SECURE_AUTH_KEY',  'rwEL,(jaJl>2_ib-6jzz=D#L}A?+E2j@&(wB36m!Q*mUS$)P|NEG Pm]03^J![^E' );
define( 'LOGGED_IN_KEY',    'LAQ~t1J&B)zzxeC}AalKvF({|X+Qtye,~ILo]&n|^Im?@ ?Su,8B~6MZTC|FP} q' );
define( 'NONCE_KEY',        '@uTWm<mDq|cNpSz%idb8SL[wd_}](y0CsDQEpAZczw.8AP1C+n,vXegF@b5{1Dol' );
define( 'AUTH_SALT',        'M[A?QY1vnWV$u247UdM5AI^b,AZ%oRM+HMJn~tGO(bjeqc|me=$Fe *p ~h?/}5R' );
define( 'SECURE_AUTH_SALT', 'YZ#6R57YzlaVBohc?x$8gK|i-i,vPL?>3Le-uNN4iE{7fsM]1n?Q7e^4XFKGV!rS' );
define( 'LOGGED_IN_SALT',   '=JBfpI<Cuw$|#~i1N4U=o*[yYIGl=!n=DL5K;.t ~GTimnT9yV4=Y Ck6lIIvW=p' );
define( 'NONCE_SALT',       'M$i>OWCBwd8(qV.$p~*k-O(?)48./(r%`i9d%R,4f ?E!YX045WOW+=cn 7r2`SB' );

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
