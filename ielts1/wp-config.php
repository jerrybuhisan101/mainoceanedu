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
define('DB_NAME', 'j8e3_oceanblog2');

/** MySQL database username */
define('DB_USER', 'j8e3_oceanblog2');

/** MySQL database password */
define('DB_PASSWORD', 'jdmgzqs59jc');

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
define('AUTH_KEY',         '| +SNAF$#S2ww*Y-&#jLq[$I!?T@[qA^5WIkN7x!0,C?$/FQ},jE~#4Ctl)nE.A4');
define('SECURE_AUTH_KEY',  'FC!*PSpm]r XZMR7Pi*?Cj= &=[sB6FuC|d!lS20;3IMU[2:YsR5U6F;PugO(n0 ');
define('LOGGED_IN_KEY',    '2F[[*w#3Q]-B@sT=W,fzM4CIJYnlj5f52w~yIr| RR6>(cM]4JFj^9GxVgnIV7&r');
define('NONCE_KEY',        'KSc5rn3%?zD.)W+37::(3cH!Ou`*:VM-!ri&ad^D%F{z.jZdLG]Sh>JWd2.sUDl?');
define('AUTH_SALT',        ':y4{BjE7*.`/l97a&y]k:!#W&XbwlXV<33@257te_v|g)8;;H=2r#+F^{h<*njs6');
define('SECURE_AUTH_SALT', 'O!Giq2Dr>ASA}p)1,Rx2%gkRL;Df?4U(%LV1SQT$0Z/6k?/%.kD]}O8&>]G[~#?l');
define('LOGGED_IN_SALT',   '.m&7=Q/V#8Q0B[gTCH./CD/yarGLq6(pzUMXIjW{@$b:Dhi4$Mww*dFr T7GY,.X');
define('NONCE_SALT',       'vGmqZ]op|dzRB{e%pZNyo4/Nb4I%2{`pad]|?:I9?|)<I[D?,l^)RJ0oD^^,@ctr');

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
