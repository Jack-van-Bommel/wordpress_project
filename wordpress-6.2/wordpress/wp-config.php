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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'EG_ssb+q=7&X5NW?8srV:AS6GWb1i#HSaU0/t^KODb>Cj7V9J}%y$%X{>|W< Cjk' );
define( 'SECURE_AUTH_KEY',  '~k)};io/je4197fdb/<}W`v10eH/(eTw g]a)DmB;P,b_=AZYEXk!Kj9%MV6HZGH' );
define( 'LOGGED_IN_KEY',    'ceIlz{VZ@6HT{Vd/qF,0P?}P5sMf<iA>&vN;#zV{tvSO[mZQ%g;yR%|;FzeJbzB-' );
define( 'NONCE_KEY',        '|.OF@HH5Bbz?zUkFY>z056cxiVpv5uM}-2GQ<9`]HO=v$#xOzR8u*ca)ZH,iix[-' );
define( 'AUTH_SALT',        'Z1uT$J&KalUc:ZNrmJom^4#{*Q4CYb]|vOB`f4```0@-;)7e*k`tRu|DBHMZ=-Nr' );
define( 'SECURE_AUTH_SALT', 'rx=[GUtc&lE;-RoYoxi>gF~(X!*+$deO*M6Hz#|}&Xj@%#8-F_Fj5E4(SU,-7PFy' );
define( 'LOGGED_IN_SALT',   ',LV=~Nt:x sqe:nz<t,K6Z!:c!c#yq4|&/Com|gIY{o0Na^h./ZIe=;e@EK`P-na' );
define( 'NONCE_SALT',       '*YdzhH3G6AW]w8{pq>q%GK[F^tR;&;va^mD^;ZI5h[RH+gijg{VKIFXDS!U]t%2}' );

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
