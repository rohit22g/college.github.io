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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'college' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y!sS7I.[]_7p^^L.Cbe&~mM(KJPRVwce! a$8SHTgB;;@6NV:w$#oiZp$uZwpl U' );
define( 'SECURE_AUTH_KEY',  '5UpZZ7CxRj8h)L8kU@(0n+g>Y>2@ggrxF9*>jwCyaoVdaLl 1v&Ae>8A`,,$g9F;' );
define( 'LOGGED_IN_KEY',    't]8g!&8+2m9l#_Z?k+_MSF4#n4qe1_<@`.usjYYN}0yM$Bi[ku?49R8{w,1`G<d7' );
define( 'NONCE_KEY',        'p]>!)G9e0?j|I!`6=#ys`XnIZ_?YkK]pO_w%c5?,5)DLb<Y5+xptsrR0Kwv%7er@' );
define( 'AUTH_SALT',        'o_f :+;JOv?~wI_t(~=o1%N<o[3s^mk!{~1ms<AJ=Lz6q;t7|gn<1)iJ.w^%r7@S' );
define( 'SECURE_AUTH_SALT', 'pq[{Nad:r{Mg|ucMRv.bgTHn$av8>a`i%[tv)]@t3bY,Zdy}LjTiO]wD4lu<!G}9' );
define( 'LOGGED_IN_SALT',   '10QG!(pi]0?k%E4yv 5RG(+jR8hgdNy*]el|lU:<S7,1aT=N$:S~qgAu_=^iTuJc' );
define( 'NONCE_SALT',       '{Wxm~/_ca.jS|0,IHT<gy0kch_;(!`*]r*3yKGsn*rcZ<ih;#&kKDpBfEk@O;e~M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
