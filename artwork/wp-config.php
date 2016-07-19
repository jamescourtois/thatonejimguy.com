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
define('DB_NAME', 'artwork');

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
define('AUTH_KEY',         '$?kie7!Er$@k7MiAy$U4RR9t&l?SMa0<)W>nwfIv@.Sg69$c}2@iJL:}2o>t_hFo');
define('SECURE_AUTH_KEY',  '}9WgF3ZQ|`tT|e<_sMap/|UTPD4NA_}r=*=;]|glPUmBv1<6_4JbXqvp%HdvsRNZ');
define('LOGGED_IN_KEY',    ' wF|D=Do p#q&IKb3U_$@zD3oII* b<}|d[f-HJ{>j52[u0VSE[D34fum9pzdO56');
define('NONCE_KEY',        'Mct0pCa=<Y,9|ZyD,El~XsE~G4)/|:/fgA|({!p,-ER`Z@Pn^nSz NaaSQK<(@f5');
define('AUTH_SALT',        'Vc?h|bsyTyiogh@6g+a7;t)ja3Zb+8DC{2=v*v)E2{,kPmVtU0H*4.QS-$-G^4}`');
define('SECURE_AUTH_SALT', '>$1@x1^ =r8QYS!e#=3mWE;(j)P^V|(|<}g?/)_{/x@=E#u9<j>.,sAZC0~1OORE');
define('LOGGED_IN_SALT',   'x~[)Fy4&i^(BtE*Gi|TWa;Y/_nU>]`wsB?ABB4sHE+2e(9igx} mG:[Bz(gqb`*%');
define('NONCE_SALT',       'ni!LVTrAzdd~i~B)^J5XbCh  <$2QiyH:/,4+bJem6|[e8z;}XAkH%]0ss$OrS7)');

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
