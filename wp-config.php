<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'test1');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'cat');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '5JM_[$9={Rno$:IK{0+XH0anCTMX^64r4z7I:(l!_/+jTxXPs#lF|7Cm#|2BD5]n');
define('SECURE_AUTH_KEY',  '||L&R-}X&1$/AP)YV^n0?M|$K7IHaj/0v1X-]cG=rB&e|e(~+%DDKXCNuyMa,2F=');
define('LOGGED_IN_KEY',    's[`Jt{6gCih*X;$ss&Y{FTeAv(u~N||Fi=`4ps%?r|!l`@>hiGZxN$4yx<IB6Y{+');
define('NONCE_KEY',        '4q~-GJA?Tob`{3/y;xVO|_DJ+0+:A+57%qZ&aX#[).{EV@+I8C3zAz!!aOr&]3uZ');
define('AUTH_SALT',        ' $jK%s-*o8_cKscR|CI]m+m+JcGl=?9Yyhmh0>io9*cz<]^WI@]&r(I+xLj$Z+N%');
define('SECURE_AUTH_SALT', 'd| E1y7s2Hc_e-<ok,o)$QWq17<}.!eUf@7VLE_NA<=;JmFQB1f`}L mo#8Exy_}');
define('LOGGED_IN_SALT',   'g~a:]~:%QgkcKA ei3M(/+Eg5M`YjT5GIP}]5,BJDK7U,kL&-FFz_e9J<t.i]7kt');
define('NONCE_SALT',       '~c9U.?@R)#3df}K,!)f}o|.KF7*qZ$tn<9@_h}EIA@wqiHs.v@q9pT7c |:o6PA6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '90210_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
