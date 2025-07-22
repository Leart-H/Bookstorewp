<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onlinebook' );

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
define( 'AUTH_KEY',         'L`2NvxZ8q{S0`Y,Zwpz1^Hv<e#KBm:BuL8w)g>Q|Y?GpD-Z;=<~*q(]Pr!OPx5s:' );
define( 'SECURE_AUTH_KEY',  'e;i`cY@W7pQ-Myqg}h[V^i[^+iFp#<36 e_1K kE$pykKv9a$`{t RNg|i&gM)q5' );
define( 'LOGGED_IN_KEY',    '03jaGFY|!lD voWY.{y5dGEO.tvRQzg(<U7^o8n8nSZshlE5FDJrOEUCFW>KxD<.' );
define( 'NONCE_KEY',        '[yfTRu;t_8H_U3)0&,mgCW3k(P!s3,TD+vYX&_|&gsZA0^^,gR`yhM(PAYwv>KWY' );
define( 'AUTH_SALT',        'PED-v}m?2=1>PI<pR:&SNk`^P(3V[Ow|TwY?!G?P&](_]h>>(A*kFX,gi8&saW%M' );
define( 'SECURE_AUTH_SALT', 'Jn[Ld)TYiAF+t0SiK?fU5T(1.#IAwC%J4rqo:o,Qv^@6$mILS=kC)E*&8h2@a-D6' );
define( 'LOGGED_IN_SALT',   ':pG/OM/%a9gl;Uy.IY].mLZROw<*E-9>!?w8.G0E{>,<>Gx<#clz2%=!34]f,7.D' );
define( 'NONCE_SALT',       ' K_(E),Y/(-sejj!Iwa6?4%=b^NreK1_/kKZqIwn z@fD,Kn<-?G>BI>78B:9YX8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
