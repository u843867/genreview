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
define('DB_NAME', 'genReview');

/** MySQL database username */
define('DB_USER', 'u843867');

/** MySQL database password */
define('DB_PASSWORD', 'kippercat');

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
define('AUTH_KEY',         '0>yyxTiB3UHO>5Q&|vA?5=Ez#bbww5} ~G/~E5.;g5SzTMP.fOk3nO^zGF;KCGrF');
define('SECURE_AUTH_KEY',  '`-n-b&<`//u{+G})~rV0T;TrOT=eYc$$X|XNcT>`,t+Y[gfDn!0QgzZ$Xol2JW~(');
define('LOGGED_IN_KEY',    'yBhE)tz+8YwLt?$NB{K]*<gpw$/(X}<N+mQLcm=z=|t}$=-N6I^:#Dy]SG1+-h Z');
define('NONCE_KEY',        '0A_o&unv?H[HJ1UMCuJlc+M/?|A<ZdslF9w#F9-s|;mlYIZ5]rRd`-Qqe*PaikmZ');
define('AUTH_SALT',        '*rv$f+@}E2,MlXoh^-vAy<&T{[Qn`Ok+!Do62}>;r]lt1b4~0]U%)D(guHX]1| B');
define('SECURE_AUTH_SALT', 'ZJRkAnpU8r|z-dq5mBHsWvfXk#dbfXiK>6R*Y8MWEZuhr8.B[-.E88tPB%;wzf I');
define('LOGGED_IN_SALT',   'f>|B<)p]]lv)d0$k]-?fV3]3-Z5g(38@2<u6RCZw}|~_YG5*05j/Q>oB`N|$e?8.');
define('NONCE_SALT',       'c&0zN-|*Y:/4I`~Gw;YBUJ+E %qZSg_R3!+g_%uh/2(LQK5R3$O0&u|g4wDD9bpm');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
