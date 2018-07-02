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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'kaco_trial');

/** MySQL database username */
define('DB_USER', 'kaco_trial');

/** MySQL database password */
define('DB_PASSWORD', 'tM4ro4b0JKU');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


define( 'WP_AUTO_UPDATE_CORE', false );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w=;+80)c IiW5z^!lSM4x&z6Iz?5zPN&7f&uc4_]&{6`tX[kbDvs$OdBprJ+;/]R');
define('SECURE_AUTH_KEY',  'BXn^[0piByo=;l89X/t^s6JSID%}=%i)Nc,/.RW;K$0vS}c-<*zD_;e^s@Roqs_~');
define('LOGGED_IN_KEY',    'Lv| hjtxeM9(O]aT2#RgF8-cn4%!Z5DD:p7Hk42]&xW@<S0^+(kVOSRPm}I@4 ;8');
define('NONCE_KEY',        'P,(c7p4#:b7Y$Gf 2{8z||Anoi4i*2VNY[S2ui8L~WG |T~wJ59W0JAtJ:gMzb]=');
define('AUTH_SALT',        'D;EHV`2l^{,PMi Q<j%$/sN*{4 -P%<:zg|$Z<6T0$4xD*kX$IG|W0!)eyJnZOw/');
define('SECURE_AUTH_SALT', ' $c[9.{enN*z//0}XHK.{%X&Tf!p7r8P c&sy~h_<,uRU&b6=m]8>HB0t#^=<Dny');
define('LOGGED_IN_SALT',   '%EJ+*!z3$Upb!>.}^t:{SR5|p9Es!M)r=F,;E+;=w-v:7Y;M~UKB9Y^F]IbHK;lj');
define('NONCE_SALT',       '6[Y29RJvx:nM_sG+{hkT!UolfV[}e|_X[GAA-~$VR`hkH@%mXV}Yo OA)}f+Y!FC');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
