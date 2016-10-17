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
define('DB_NAME', 'wordpress_e3');

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
define('AUTH_KEY',         '3+Ap1V}AEG2#OMKWN%MVH#D]!o`Yb*G<dkJ!jf_`K4t+%+1Q9fq^dylS1+K~GYK`');
define('SECURE_AUTH_KEY',  'u}cO huw;$GMflrfwU# ~3p!iIUMV^Ev*=z0q}/{(2g?yP1%0dA*?BhC}Uo-=Y#_');
define('LOGGED_IN_KEY',    'oSj7_{YHGjQ 6M!l}QHy]S`:lsHG`W>(Fp*HYX>CH/^u3)!yWgyU?Q%TFybd48+W');
define('NONCE_KEY',        'nGAgUFz5z5@Je7f*h` ,F%9w#nEaT6AoozVHE/ep9Oqyu1Z?/vhETyKH @dGm!;p');
define('AUTH_SALT',        '?h<!@:#`pwCPH^WIS@h~PNCQG-jZ=1W?0wdEsdZ)L>$qPkg$_O{SoAwlVsw8s8+{');
define('SECURE_AUTH_SALT', '4=_m&N-7@DI$IAXWl&LsGu24NMyQ)h+Q#QFQNhW,htr06pC}-Ml:zt|X6h&ZFUD/');
define('LOGGED_IN_SALT',   'p_|0H<nmGZ9naG<Sr -5*k>bx_LAHE/}]c4zJ~>66{/|{bW2o_E[XKp%5T9K+iLs');
define('NONCE_SALT',       '@NQTHU9aKIy1+8549k]^br&8S>c>Lxh}I!5Z4MGs6$OozvYTn,;dKR4ATmX!t8#;');

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
