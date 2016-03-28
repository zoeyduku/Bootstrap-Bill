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
define('DB_NAME', 'wordpressdata');

/** MySQL database username */
define('DB_USER', 'WordP');

/** MySQL database password */
define('DB_PASSWORD', '436f6fc68656174');

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
define('AUTH_KEY',         'w0oEUy;wpztFEDTS(`)AP4^wwg2p-7~R2z!aCg<_t0WfZLI+R6| Wc!!66k5Z7-H');
define('SECURE_AUTH_KEY',  'K3(>YnX8XG]KOu(Z$ *%<DWa.QrTI|e%ILY1a]MJ-zpq+$9MmACyvv;1#MY[D3G.');
define('LOGGED_IN_KEY',    ',KXM4sJI]|JD+m,a/PbiZ?9<u01@BRuxH:]:-}tz@jpRi->-bj5RAX&z]&R-GxOw');
define('NONCE_KEY',        '<8ysPlto(PuYEToi,-Y+X|<{{T.(h~3!4)MORw~TMnided[ |5rPc4rI<!QC+o-n');
define('AUTH_SALT',        ';5ddyyROmvn@&%e+M9Ac*iv3:04@|?G._ah-,9v>T@fmrTX1cqS%sHJtp4B)Tr~@');
define('SECURE_AUTH_SALT', '^_V(;>mL2NK7n-V!x{]^5Y<U+sOY1UEz<.N_IqCY|eNQ<>yC7+3xAv}>;.mPAwFE');
define('LOGGED_IN_SALT',   '5fkxY:&|y[+6aKe_CV`j;t<RlV78IyB P::8&2F:Ul#0.6.b.F&ii5>-iBOT0lLK');
define('NONCE_SALT',       '>K);8z5+@^oG*=O0g_vv`<Zy.T[(sna2[>9H|+kq)6,+yFFM)aTes-LX2;^z_/Y?');

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
