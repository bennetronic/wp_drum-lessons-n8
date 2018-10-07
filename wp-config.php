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
define('AUTH_KEY',         'Cx$d2//6Zf{d2bKoL2)%#Y#lx_Hr-|$fOGIkdO^:@v==[X3~)_>0HCkRr,ieCUYo');
define('SECURE_AUTH_KEY',  'M*&AmT9;x{*m^tSra!J=vk,.0y0d;xY]))PK9EYTIOySMV,N%DK&!%Pt0$G$.2Cs');
define('LOGGED_IN_KEY',    '3$<o#7+>]lkO5h%nh)*RE-k;@VGlJh9jM6$:rFc.IRW[X(f3ikpcVbg]LNtf2r:w');
define('NONCE_KEY',        'BZC[*3`uAkb^lX;4D@71*~z|&z^,E<nh!(Vos_RZV2Y`7R.btqJ@v1Yc+G9UO3Mp');
define('AUTH_SALT',        '<j0Wr3&=aqYm#5!(ukMkz/RC%?c{9JKtMN~S91)MR.KgzInAI4za_n5-e[oCMY2x');
define('SECURE_AUTH_SALT', 'p9$11?Ea28g3=Mb@S -$SRg{[rvsuZ=V>(9?kiPu5%vl[$PI7d@QR7B58Tj&i-yC');
define('LOGGED_IN_SALT',   '*b(vx|TNR->j|RMD$eRV%$e,[qb]E/)+dW]jJKG[JCa~=e7}k#l.RE*`c/B}Z4H*');
define('NONCE_SALT',       ',K#9wV<B3gEp3 1rOMoo}K_Lqp)5RIhMdw=qy_3k|{SImj[5v4DsDe}OxJch<;xH');

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
