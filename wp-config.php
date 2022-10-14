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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cookingforall_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ';i-Z$GM8YyTA}:G,uP-_/B$Jw*_!4rQ;~Nv2-(_}ohJ3[)YJ+<buWwr6aDCYVCQ~' );
define( 'SECURE_AUTH_KEY',  'Ryl.KDrQ_-U+*Ghj1(Iihiq frNj|@=aw/|l]ZTM0Jc@hLeSs/9F_fz8#v}G*&Mi' );
define( 'LOGGED_IN_KEY',    'b3W,N9sQ%)Z@l(*m~ksDW;~C;@0c_UW5MzhT/7i0*3q0F2yU#VjHewE%0b52!0+N' );
define( 'NONCE_KEY',        'Q$&,:>BF>_N(FW,=GJ^spW*/tB4Zk$ASw-ix{M~COFz_NK~EW/&n } /5R<K?UYv' );
define( 'AUTH_SALT',        'YUO)NW}+gt*!|R!L7$h*/Qs+ u}L=UT20TivT.7BRuX3~gAZe7Tc- m_eY+-R~nn' );
define( 'SECURE_AUTH_SALT', '37*Oj+q63Ctj;u{+Wzc5FJ.mN?mU[|O2k%#wVLCvg*Ra-HmG~aM&!n(5Vyyk|4&%' );
define( 'LOGGED_IN_SALT',   'TUm7720?h7sV b4$b*vD[^Ua{;sw2Z~HpJm8Xx:;aswND|SfrxcAy1|}Ro=I]MOy' );
define( 'NONCE_SALT',       't$Y^D-E a)yB%(<J%NqFw@^)5uK5^.<*IuCIPa%yKW<-{D}T6Kcg[Q=M56|nV@>P' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
