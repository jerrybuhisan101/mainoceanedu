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

define('DB_NAME', 'tesolcoa_tesolmaster');



/** MySQL database username */

define('DB_USER', 'tesolcoa_admin');



/** MySQL database password */

define('DB_PASSWORD', 'KhK~@TZEzv2L');



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

define('AUTH_KEY',         'xD)P:E$~@U+}bIZP{nLe szFs54j5*e$tH8mFL]`@SQRr=;GnbG*(U/#k@E|UNHi');

define('SECURE_AUTH_KEY',  'UkL1jg-05D/ ykK rx/sTydy?[_N2K^j:o -$T|DDU+m]/HO3II.0soQ L0F9!#;');

define('LOGGED_IN_KEY',    'H/OJIV/X9 O+P,-3Z/-G$8Y2z@v}_GHV9JF]B^.HYqUOADaZ!yqVJ5S.Hz+76Gpe');

define('NONCE_KEY',        ' &c[5o$O<p$97D+6z=#h@K]=~/w[Y-@%xYQHMd>NR70a:<3d?eHeN9j)N|qS~rF&');

define('AUTH_SALT',        'E8qZ,xp.RD=i(*d&|M|)seKlOKJekpYNM)Yp$^ -2YG;T/HaU4SkW_ 5uxBs5er1');

define('SECURE_AUTH_SALT', ']K}`~S5#[9}(KjZ^XN(gl[%f?68IvfD,1d:7iru>S#F&z]}@9G!t?LBOuLz$IYhU');

define('LOGGED_IN_SALT',   '9FS2|w+nO16] pi6=}K!T|q]CH{l0Pb(N%wdiwogYGl[fkzt{[@LP=o*eF}nu_9x');

define('NONCE_SALT',       'cOoO~czAO9gQo~_Th^2lR>Uu>)+*w.)YX`1x^bT-J$`+d#Jx@3vKwb:M@n(oJCq ');



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

