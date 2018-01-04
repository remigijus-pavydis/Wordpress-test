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
define('DB_NAME', 'Wordpress-test');

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
define('AUTH_KEY',         'LDsAGiF]dr#%@7Itf1| C#8&@+Ho8(f3:;P$!q,OGn5%[z~Q!Iw(^&(bF}v<ue2Q');
define('SECURE_AUTH_KEY',  ';)zW>2I*Ew)%WqD5TDB6=plN7(^iS)fkYv%{Vs0^`p#ki}`+s+-,)?_81W@Z_W`(');
define('LOGGED_IN_KEY',    'G+C:f&K}emLU7<`B=G3E{!j*U;>g-~8V*J6RfwUA*sp57p#?!$Nf%cuzcEtx(aKO');
define('NONCE_KEY',        'zRwq+2e(iZePQ3e^Ll)MD!${;8rfgqNF(wiG{| U%-(@]3okah8=cK%`b]5U?,|6');
define('AUTH_SALT',        'y* uQ4a /C-%G5a(d}bQiq[5#oqpmmt*Jc%]+zqNA-9tKguh&(6+uD,i8VMM ]gc');
define('SECURE_AUTH_SALT', ';=:($&uUmDQhM,kwhi$!IbxK(Sp6J_IWoHtAJ[R;~lqU0A5Xf+B?#Aujfqfx2t9%');
define('LOGGED_IN_SALT',   'J<6Q0_X N[O+YH2jy7_-ib,a-[qI ^ l;:Lh_#?dSh{pcEV9S@-I=$oAR>.</wPn');
define('NONCE_SALT',       'i~~ fSNE<1U-!f=FM*4Bp^mU5tWc`N-w9A^-*B[ODll!bp2s2v}3FnilyffMT]gi');

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
