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
define('DB_NAME', 'ocean_students');


/** MySQL database username */
define('DB_USER', 'ocean_students');


/** MySQL database password */
define('DB_PASSWORD', 'HF8DavB6D9z');


/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');


/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'e^?@1uM}#.Q{2tf;@LAKwW~I>^3)_$$d*{I`zXOy#65O,hN=y2C,sVvC(ST[^hQ#');

define('SECURE_AUTH_KEY',  '[pb-VMB&y<s?I!giJVW&1~m3sZ.LrQ@TxwL |>qQ%9~VaEZr#L&Nu[F32TkQ#D?X');

define('LOGGED_IN_KEY',    'l+%~X5r7:gXY61C X-BC%O):R69tW1Ia*N$x&cKIk.?`[^NAV,E&:1L`{!O,Cn$4');

define('NONCE_KEY',        'a:#KHa>gU&*{P=~c`xcZ mLrQN<OMx,/~YEXE+<%C%r&w*8c=t}1]1W9|-NQG,m1');

define('AUTH_SALT',        'L*yRUyE.P|_oY;3m8~qNu=!B~4RTnJJ&q&+@j,5d|aET*.w3y,MRONXcs&VkngJl');

define('SECURE_AUTH_SALT', '{MW#~Tz)y[,/!Zo3{m,O1mzCPR=RQ!~%O;kH.lT1n!*YXq{GLW$SEaFo%h}85.l:');

define('LOGGED_IN_SALT',   'I?bxw_|;m@kD}h#HxH8`Z+?K_gN43ZXDx,><aNa(oDPAvj5g`7jxQmki]T`|9[a2');

define('NONCE_SALT',       'X=fZ@Z}:F<k-x&0zhhJZpk-%c~ld(Y@M4-(HUQyb|0{c=b>G*6EFWg,}!EAJh|@W');


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

define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'students.ocean.edu.vn');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
