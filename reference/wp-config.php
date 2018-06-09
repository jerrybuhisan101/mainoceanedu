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
define('DB_NAME', 'zzsv_reference');

/** MySQL database username */
define('DB_USER', 'zzsv_reference');

/** MySQL database password */
define('DB_PASSWORD', 'CW3oHfgvQjv');

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
define('AUTH_KEY',         '9^=9,BsDZ)_vN~3Z7@qc+0iPfXV$Qm(8q~Te~gf&}z{,p9i!RbNe;2`#`_$0~sQW');
define('SECURE_AUTH_KEY',  '*9MINPFE+P-qK}SB-+|7I,/EdV?t2R,H2C(0,=Wa;k>YD^iC.)@<bz|95WYpIu&I');
define('LOGGED_IN_KEY',    '{X8aA%DzOh!,J1M7h:Kuyu497}m1k,-ya64~2P$R+c[F5W%cV4Gx.lA}Y8!LM/&/');
define('NONCE_KEY',        'O5.@P|dve]n04 Jdi2+JIF.cHJ@#cd5U[8(>WrM<YlMB8^5(4.q!ZmAZ.n:4r+<M');
define('AUTH_SALT',        'pN_kInBc*8]=hG~)q-3Y|n>bOIv]]-e{6lgKOsVl3_3`P@9iJ89zJ{UEJ<QNk3:Y');
define('SECURE_AUTH_SALT', 'D6f?L#HW]Vu9b-jBdu>Z.4R$[3Ykia6$ZrNRV&OKPtMNU)Y0slWZ12_4Y|,b~H[_');
define('LOGGED_IN_SALT',   ' 4wq5{ ZI1vV4*)E-=N%s,]j:)3_;h8q<?gJyF/w~p*sk$li*F@Dz0L{zJ~t]SH[');
define('NONCE_SALT',       '&LRNrA5orLl{iA5ZWK]WkW-skYqFW~wtc$1ou67^Wc f8jVA5R-X4*NRT75Lday5');

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
