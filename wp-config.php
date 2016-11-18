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
define('DB_NAME', 'stanley');

/** MySQL database username */
define('DB_USER', 'stanley');

/** MySQL database password */
define('DB_PASSWORD', 'tbzZeYmCuaAec2Ud');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'DQ#.8I)I`V:J>}JC&/D QgfeSR1Ep50E;|u_KD4K uebaHexC[mQM!i%@u{tuP6X');
define('SECURE_AUTH_KEY',  'Cb;EE:w[2=d #Ikt765HxPb9YWf 28NlbyebskI{L4Tf)CAD`h:l*9-y[o~zhT*U');
define('LOGGED_IN_KEY',    '*~kjm:{^|-;<nA+NC@adN Hs&!*;%#dXqcB u_WWu&<,;]7j-%Z/83/.KaGO_@J9');
define('NONCE_KEY',        'C3L+[od)x|BD[qBc~2nl+5hPn~[F=gK|3N*!#a69]bazN|6*s_b&TV+_p(FeYyZ|');
define('AUTH_SALT',        ',<J~h*bpcRC0m~uNP|jhetrGdQJu<Khe:S/{vfhE2Btl|:B0 ?x0uh+,2iRI|5.C');
define('SECURE_AUTH_SALT', 'SHnt?#I:WN8w-Z%YJIm}m1d(u_Zo)C||x(A}nTL$7A[].~~kYi>P{umCY}2hCiZE');
define('LOGGED_IN_SALT',   'R;A]GRiq{-y{;yGDN/zMEa]U&}-TT;2? @t=Y-P$g@XIL-7{VA4ZY/l2r>MpSU],');
define('NONCE_SALT',       '4t3CZ3/6)HYO^td2ixX[ct7(Jlhq,J5eH^is|^J|f.jB<GNyU+^N;)af;nIuG4hs');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'stanley';

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
