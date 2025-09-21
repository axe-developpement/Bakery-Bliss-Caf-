<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'bakeryBliss_db' );

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
define( 'AUTH_KEY',         'beWkA2R)96Br(6Thfg<pA`S0<u_m9b#ZN:K EP}`E}%0.I&.@v)52`]idL8aZ[O.' );
define( 'SECURE_AUTH_KEY',  '%`2gzBv_Y4qyjPu]`<>^D[b2w5?*p;r3m`cwtv):aPOFKd:08EZEL->ba6e4BO(~' );
define( 'LOGGED_IN_KEY',    ';OJdFY(Tcvt1BO^#2 Q:owGeAo0JVL:}q<Vt{($G8WHwqX)+B[VE0,uI3IR13|QV' );
define( 'NONCE_KEY',        'O3p;x;IK.E]}z?C`M4*rcAo>EC=g%~8|x|5~hAVo:86T$p&>P8xRJ<qHvG%NxAGc' );
define( 'AUTH_SALT',        '3_$=Cozdr-Apkh;zgXBOb9=%LaySFFm<r9@25vI3Il+qCaaDc&x}}_8DDBGiU$CB' );
define( 'SECURE_AUTH_SALT', 'O{[;>rwZ}H<QOG!o/^Iv/m]Rz?+$bM,a1t RwP#~T@38U-w~oI1NP[>6_r{_*SN$' );
define( 'LOGGED_IN_SALT',   'TIR5H][e?cXWBJ,KnhM93)~h}g_u~{br$tCF fE)@=Osvmrmc[|n0f%sH)#g/(!W' );
define( 'NONCE_SALT',       '>=Pr!99e6y8;mtOAfQg}@h|Y&zX]{9dMX`c%;u$S?|juO|q(PmvKT49DIVJ}h$<+' );

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
