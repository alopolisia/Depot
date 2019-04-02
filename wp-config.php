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
define('DB_NAME', 'bestbai');

/** MySQL database username */
define('DB_USER', 'alopolisia');

/** MySQL database password */
define('DB_PASSWORD', 'sushi123');

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
define('AUTH_KEY',         '1eyz@4&D9!gd]!;^XG #E@B$dWn>4ZMYJ+>Q=8F$?I|XJ(*aVp9MgN.L@fe;2,N5');
define('SECURE_AUTH_KEY',  '}oew&[xk=)XCLNE*F/|f(,HqP}g234N ?s{<=Ig6-_)dIrrW^NKuciiIS@~EN)hp');
define('LOGGED_IN_KEY',    ':0hE,wa)!QeYv+4(J&lza&$($1eN5?~h[@>Wc9UP?;Nn)KTV]%xy6M+P0htp0ZS_');
define('NONCE_KEY',        't`=o:Hz]KbVs+?gWiA(k}FM.cckF!>X *7Z+P0*10gC fNhI17|rc?a0ej}bV^d;');
define('AUTH_SALT',        ']0IvRu#}GlOHt#w+3uQf;/-_d{Ktog$2Ih{;~sz5%g/=%=%5V;[-?5S;8uC18 F7');
define('SECURE_AUTH_SALT', 'JKRy/YPPiY4>NB>XQR-xg5b_usNWF24 K _&5Nwzo!ZGx hsuI-@<`<1z(11#&GQ');
define('LOGGED_IN_SALT',   '6%7Oqd6`:T;K1fqhPRnhc;.+S4>4E,m2<iTol,wE57>55D^g{;(CQ`K/FObL>_hZ');
define('NONCE_SALT',       ';oDP+Xxj_%  hLvQ`XKy0k?mpxBmHmGk8zdd&y:-d@}UTCV/kU{I2WFJ0QvRj)]e');

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

define('FS_METHOD','direct');
