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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //

if (strstr($_SERVER['SERVER_NAME'], 'learn-mexican-spanish.local')) {
	define('DB_NAME', 'local');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
} else {
	// SiteGround settings
	define('DB_NAME', 'dbak92zfc0yeao');
	define('DB_USER', 'urccgvghjeykv');
	define('DB_PASSWORD', 'PcGbKuApa24HLCQ');
	define('DB_HOST', '127.0.0.1');
}


/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',          'wWW|uu9i3Wfvz*qr3x3m3Y`rW1OM1tdN+mTo8x1Y/N c;x&XnfYxW)S(d:QN/cgH');
define('SECURE_AUTH_KEY',   '6&;JH2ngV(g%S8% 4G%6B6Vj;0edQZwbH W2.LmBGXPH@fr*2bSsfu]/sq=I:CpG');
define('LOGGED_IN_KEY',     'dmw&dCp-eu%(Q%ie75%ie}/>;)~|[,mJKS~=o6:h(A# u:dhJxm>M |V;GiwC6{t');
define('NONCE_KEY',         'ExE2WAQ2(n;ce%vzir^v`<r{b%VC7!.D0[E+.n&`/aBz99s3i!h2g^Q)Lc-#iOPX');
define('AUTH_SALT',         '{Li;+Ssv!xF^8o?>i|<Z=|R=A*kfFt`VmXh`{OJY+/AQ%y;XA?DfT0|?G4X{Q;}8');
define('SECURE_AUTH_SALT',  '3Gg<%i%[}%N-joq!Js@8$cm}ParG=vAXL*T9^BDBf(2cXoLi5f<{C7Tdn+]_c89p');
define('LOGGED_IN_SALT',    'P<(j8fq;spDfzH?ED$N-@gDk]byI 4%^(_lXJSlT{DdcRJRm?RQf(>q52NZQ3c8d');
define('NONCE_SALT',        'x0k;XH%-bA&+xWtIt),l~U|OIP/l@;sry$3O=ctqng&dsYKrA0eBQ[o0TcbQh:UY');
define('WP_CACHE_KEY_SALT', '#x-+N2mO.J{H[z5-NZYNFoucz:7hf<$%/n^au1hQcC)R=Yrx&fz`jCZ2}M:h(Tx)');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

define('WP_ENVIRONMENT_TYPE', 'local');
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
