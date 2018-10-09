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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/jamesbennetts/Sites/wordpress/wp_drum-lessons-n8/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'wp_drum-lessons-n8_2');

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
define('AUTH_KEY',         'sS?,td3TsG1Y*[a%$$J{ !!LgtPzA%-U]ty&bwVq`s>q#HSXd2^ikdPi_x?DYcJS');
define('SECURE_AUTH_KEY',  ']`aN.Ob9{,-O; k(hug[yz2/(5,vEIWeM,BqC{ZP#NSB<T):u _*::Mg:fN%03={');
define('LOGGED_IN_KEY',    'FY*y0Tb{|kks@4R$O1Cj}v(=eOYQ6@F0 *af(P%k-i+6(ag,t3=M*R~OPG41WMJM');
define('NONCE_KEY',        'LpIA$PS$+>W!+=wD^0i$eD7Rjt)8pnpYru;>7pP vz1.0W(nigh:9/{Xsc=_1-=)');
define('AUTH_SALT',        'xv1F.JC7fI{&YePB>u~xu3Tar(RwF6$H[6fko4NdH}x6*ks$=)NYK XC`oJ7lR{e');
define('SECURE_AUTH_SALT', '@vuU^B)Fvv^j>,) w%pPmqYU/Askw{i;0Z}Lz%[7RyM__H!OJFw`b5[SWZm<s,pD');
define('LOGGED_IN_SALT',   'NzOy4>XjcOFt}}ja9MbcCdlA+7S$!2Q(;NZFJ`WyTDmrMNi(b9SIbcsma SF!$53');
define('NONCE_SALT',       'Z}$hS;$[(/%MAbw${%{ms/89+FhDdP:e@3Kw~#gR|Y7*#+5GvW-@jSW8{KZ[X>Wl');

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
