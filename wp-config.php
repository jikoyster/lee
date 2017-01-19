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
define('DB_NAME', 'lee');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'r,&d],7:wqDTNg8dr8US,vlh~<X8^VY3b24ZKtuM!6l)HeK;o|/;Y}AB?,{23*OS');
define('SECURE_AUTH_KEY',  'Kg-4y}%E5rj QZ*fg+Aok!M/1Iyb~=hlvm15Klzic%M]JmZJO?dg4BK/f3CV/I4S');
define('LOGGED_IN_KEY',    '-:FsT%t{`_P]>h/bEX$dxQW^8)DCoury^G#K@*7hU&|[=[-{1[So^qIM|,f_>X&7');
define('NONCE_KEY',        'M(/o}ZL@<^$CC(Y&<wN*cT> y> nVD59IG0sq#Crdn7DtEGwm|4iCh0wg)~TTr}?');
define('AUTH_SALT',        'oPqi,i#Iv^aCrMO0/L`MIK`9)]cd6s}o>.}Aq[jFf1u#b]0B6Y`CJ8.e!]I+^Q.o');
define('SECURE_AUTH_SALT', 'B[68JE*cb@Ho1?+-CTJi^m2>Df50j[Q8NpimH[$|&$QO1I6+>R]H~|MblRuj>F,=');
define('LOGGED_IN_SALT',   'NsUNHF]Y.bc0?~S/m+Pt1GJN@G+1H,*APvo3rT/sOu$*<_%s^FhaQ9*U7bjLg[zQ');
define('NONCE_SALT',       'LUW*6vK-vir0B3RTL8g)>qOhWRW#xl&;6*}_XT|f8B[a_5J.5N#nCC0`TenfWV|1');

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
