<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',LVwi7vl[oGXMC#N%i/G0:X9Z6v|Q9*Qzus JPE>pmTCb;1LLqKQdS%2yny=!szD' );
define( 'SECURE_AUTH_KEY',  'tj:b=RJK`Vig4<{g]JUU^WZQD73x?Mt;L-R)L(C} fL^!uyZz0lH@Kti?_?@N5Av' );
define( 'LOGGED_IN_KEY',    ':sl42Pd|:)N&+(*+,n}E|_a?EX-[Pa.H#r7w!mM61}ZJZQq@E?IDF%HFgUdA,$Qk' );
define( 'NONCE_KEY',        ':Y9U)@c2qI/)*Xt`p(fBLG4WEQ+B4~d)p57NS3GE ![:d f$c=WH`m3;h%!2yZRy' );
define( 'AUTH_SALT',        '34`Uff8/@b@iiYOC88+X0HU/Oc)@A(RRuy*+{3N*7W`5KR8~Blgf#lpA}lg/&~>e' );
define( 'SECURE_AUTH_SALT', 'ptJ}KL!$?#_NE!dG}!2}=Y_o4+XN4CT9G2.2D@-dg6IQSqmPW=Jx/XK.TJ%u0cN*' );
define( 'LOGGED_IN_SALT',   '8aL>t+;tlH^3(2&@Tb!^/bny7Oj:R.e>gt{xZd28zu$4CjY2gIZ|4jIufQs.1N{c' );
define( 'NONCE_SALT',       'DVmqd-sa&#yFl6OV2;O5dRAF}U!Atim^gBE.+3,2nWAb2|}61n)R*)Z9?))w4  D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
