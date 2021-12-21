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
define('DB_NAME', 'wpthemes');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost:3309');

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
define('AUTH_KEY',         'XphnbI{`P)|bX@Sq_]H0ZTAG^7[Yf/5fW-B34M-]$7kaMmJ6.IXR O%kq/:3CMeo');
define('SECURE_AUTH_KEY',  'F!#S:fF{@Da<I$7GGjaC( mdL+G4e`]._e,;k+r(H3/n-N-[p)2&Mx{e=ZqP^m?M');
define('LOGGED_IN_KEY',    'Wz[V:r/b52eQ.uXPukuEoGo:qZ)a!Lp;}owZAP(|=3q+m`5j#.z$HBq*O=*7[gA^');
define('NONCE_KEY',        '?sIPzRRTk_=?9XL@VtHzFNKF]!,fB#wG]T0zG]]nc&#YLo+c5$M6KT/}fIjjZZ~&');
define('AUTH_SALT',        '1$P&AGbD9Q.!={NR)D?]2Rx8.~+|Njw?#k)) Lu8xE~SO!CFjI<r)JUEYy[6Bp,2');
define('SECURE_AUTH_SALT', 'B-_G  Xl}7g7mJz7S[KKl,<{k:5Xz`R}u#FZvmm5tmwp8o-0q+Ag06#oS!gq4tld');
define('LOGGED_IN_SALT',   'U$DvY![F:+z(/U#*xymyg=;_OXa{`mdC|9Z;L}.zx@+$aUMO>Qp)w4Nh=<b}AG,C');
define('NONCE_SALT',       '+qO:7`#2{NVJ5t.@iD./]Sid@6=2|?|p3D8xWuy)m3k:$hSKD@mGSg8~Lu*eX/fW');

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
