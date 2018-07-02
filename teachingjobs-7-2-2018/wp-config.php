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
define('DB_NAME', 'kv16_teachingjob');

/** MySQL database username */
define('DB_USER', 'kv16_teachingjo');

/** MySQL database password */
define('DB_PASSWORD', 'p4t7iZSICRE');

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
define('AUTH_KEY',         'h<yWp2BM0_vZO}V1q>j9QSs]~IWLn&l!:Ll<Wrg]LUk(zk^qY),uw1:7qn=WAGz+');
define('SECURE_AUTH_KEY',  'zr-2~# ^`f.*!#SqaSQn<[WL]kz$K97{Iw2/FcCmau|}S+nU%gq18$aiOU:iT/3d');
define('LOGGED_IN_KEY',    'y1ELBF..!@/F~+Dy0ZOxau32@6!?<%rlXS[Y?Lqpp1Tw)k!|<?[pTMT9Y6JY|{6 ');
define('NONCE_KEY',        'FC|Mir[c@~4i0b0~QD!M(1+wd;~B$;:)C6bd32) HV9>x4PhWR,wTRx/p>1q9>$<');
define('AUTH_SALT',        'OUgj>9KD]C 1PQLRCy%V0l(&Er;d5*>YZl=^g^D:I3D. F$A&MKL9&fHjcs#OD.R');
define('SECURE_AUTH_SALT', '3W=vx!~M(Xt qRLG~)A`]-U!A9zT2[5|D,lw;0w7!f2z:gFVezaj>urANj9`&U!6');
define('LOGGED_IN_SALT',   '8Abfw5lb4ka/yAkXjyv,S]Y%:7YJ]))k=yc2k%< $cA>xn00[~Yw[j~G}I+|]]3z');
define('NONCE_SALT',       'FM2o.SqEg!=H_m6eZ$Mz>(QMHv`@``Kq;Y!nea?/t0B~mRSm*Jt3k>k@H5Ds8r5 ');

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
