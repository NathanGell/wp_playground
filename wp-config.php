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
define('DB_NAME', 'wp_playground');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'hk!?Njm={o3Lqqx6v)A$F~r~kT~R[T5;9H)z0-Vz>QY9MCS-/;0jxnu1}~/sVZkY');
define('SECURE_AUTH_KEY',  'amE.K1DNUObNS/*[uCs=Y+xJV}zUb0Ro8ai?DBMjhuEAJRSb&|1]au*shGO_0J9G');
define('LOGGED_IN_KEY',    'j*jx@aym,O7at:IUguZo0 wZ4vuL6ITmYY,{{<T?ZU61]tkuR<)$xNEz{(7K5bv ');
define('NONCE_KEY',        '$x7(d?-v# aD_cM *1+&Z,,.WH2P~UaBO?wX=$vt35wyvx<NIqw3KF*6 #y4afIs');
define('AUTH_SALT',        'Wil}qu >3V=5M~N@Qk&28 ,QGKmo7o9YqCUh@b2g]D?Y{`lVtXb]F{>=fZnO9n!N');
define('SECURE_AUTH_SALT', 'HMb|h,7[`3b2wd$vutaM|_R$_7c].1U a7;0/&.J(Wyrvc0Bxz8K@>X$Do:_]ssR');
define('LOGGED_IN_SALT',   '= h@env^VZv^R3nuD~[y]_LA}x?f08?+}iU3Y9ew<{B^Bspa6[ }`m*9]X4=!Ru2');
define('NONCE_SALT',       'Wi3E<WBt?_IV@53yd=kL_N6d+No)Le*&&+0a}m{M;lA?o0zF!@a2|ij%yR7gw*R8');

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
