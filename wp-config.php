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
define('DB_NAME', 'wp_drum-lessons-n8');

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
define('AUTH_KEY',         '~G0~9j$<9[Q7RD>Y{[#Y@=xM$Knx68D9/N;`taADZ5y,<!;d_G_<e#(MNii%JDr8');
define('SECURE_AUTH_KEY',  'oWjrn@1bU<Wwe80*ka=K]!p*D8}yQssRgTBBfy}w5vdzK#EB362<y3Ymq4);-~(E');
define('LOGGED_IN_KEY',    'f|>sYo@YwBxyQ7HX*#/ex3wJ$:RzdloJ~(yb*7ed|:2SA+P5TAH7oHh#i.hLAF?i');
define('NONCE_KEY',        '4h;eqb)<e!KHd8FP$r;1<4WWV5fj-+b.TN<f|1)Gt$dvPF>ppfj%*cX7@9rqk,BQ');
define('AUTH_SALT',        'w3f{5#H5R{xf$O-4Gzk)O}8qbIg>n/=9/^:[WJ8>v_FqB<~:iQZP3(LWYcFth5pb');
define('SECURE_AUTH_SALT', 'I)~=#3320BO!/@a}))-ugfHQi&BN[O0P*dZw;ZXJv82)ssaucNds~&d6-bkp?w~-');
define('LOGGED_IN_SALT',   '~/i622Cid.,zDWe$:H0lS65U(d`boX8nmiRX^Qx`),/$[,h[+_o-mj5hJQ1pOcEg');
define('NONCE_SALT',       '09D3[9#&*o=*^-5TX;Q5zeh!bp:+;*0V.AvYPWM1O0Gl}oS.gt)c*y7%2bz#vI9A');

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
