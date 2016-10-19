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
define('DB_NAME', 'devops');

/** MySQL database username */
define('DB_USER', 'devops');

/** MySQL database password */
define('DB_PASSWORD', 'SzbdDq89');

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
define('AUTH_KEY',         '+]f^8$!XjIsXja_O!<|e%yw4TIz3$eC?,jw+`n}W@NJWhyS30ngJNxCB7Q?1Li%g');
define('SECURE_AUTH_KEY',  'JA%pTYw&R>[.[,Ni[KeVN{5R]$ytcG~[u5+!Hn#<KMxSZfgwL}2rX+W22_O[EX/m');
define('LOGGED_IN_KEY',    't)}q-Mx{>(Gi+[UKJ-fG]RC1)@1IE;ZnD9ly-$$lN*^KUiPonO> 5<ZsP5%,c-l3');
define('NONCE_KEY',        'L#;eOR0<`#{R#5OK-re1v4/94Bj7KF1ZTsLkA0]O`bkg;*U(aOPl.%:=]vzkaHFK');
define('AUTH_SALT',        '>@c,*ylD2E#ur$?f5wI#b>}%UZIu<T%]!V2ZC Lh^g%39Um.:O^,GfGj|l#kyq/8');
define('SECURE_AUTH_SALT', 'Rng;Hl<D(jW?+EKec/0pTfINu=zI;{ll]YpFE=~.jetbq{ kA.-`au:gDSQp)~ X');
define('LOGGED_IN_SALT',   '<7kEGWJI W`8W`-t0v%8.!%g3]j A&jj u+lNQcq*!B9lE^~bsR<nFecA#0w#}ZD');
define('NONCE_SALT',       'u7k85b4x5?8~sXW`}]DDZ#{{6N/{KmX!wD4x6ixi]Xo.cZ4ikFt#r(`oju_#<fT.');

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
