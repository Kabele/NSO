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
define('DB_NAME', 'nso');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'fk7U7Sj:3Uc,zTa9IZc5@]g@&L<8H*5CKgp:>oHmE&N:wJ2_c=s~-XSn}qevTfjg');
define('SECURE_AUTH_KEY',  'U@Z096?fC>utwV}YZhMRbc7$v5+R&wds<+L<db7OK`?p]BCeg/N^PG3/U2oGtpEB');
define('LOGGED_IN_KEY',    '#Bxi+{iwB2]vm$)2T4g])@qv1jO!0z)[>6OeMB`hwG5`b#U%>pV_^d)f+INMxaYI');
define('NONCE_KEY',        'X:}lY:pX2 Qa~:[cjb<L9_P7;YKnT.77v1&#3pQP?e!?07-;q[XOiuEsiu]]8#(]');
define('AUTH_SALT',        'AsY<FkgT,a_E^#&!I,ywF@:_/v!_VUtit;O.klBLp]kR]#~**r3Lyj^}Lt7#t9X7');
define('SECURE_AUTH_SALT', 'R?Cg7c31.%qm,P,^V_Hed..0gVGP>0Jv|1xo1Tf(NZmz5[NcuF22DHDjk:z[d[0o');
define('LOGGED_IN_SALT',   ']Xj4hvk<S6(zf@O5i!UIU@-b350nyUY+H?2_~kuk+JRc@<Vv)&.X#tgLyHOA9ZL?');
define('NONCE_SALT',       'eWSTkck9:R3wbv6>4PgC8?Z sU#ep=g=84=E?TFuSWj`*ySIV{IDg,=Px740b <J');

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
