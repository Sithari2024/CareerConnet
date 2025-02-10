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
define( 'DB_NAME', 'Assignment' );

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
define( 'AUTH_KEY',         '2SVD<FKA8Ghln]l_7I^5/EOV-v#iDzc{y1gj0$$3F$uwPjs n(G*%LJmfc(Zhg_M' );
define( 'SECURE_AUTH_KEY',  '*xsm3=G|w X[Hk &DYF>u!~_h<rkfs>;-Y.oA0w)=f;gA6&.CNIa6@pDR(WwSY*a' );
define( 'LOGGED_IN_KEY',    '3?VuJaVfA82MN$37,LL96<I53f@Bo(qs@jm{uqg+3GBH?K^%2fwT%(A_(wCjKPcK' );
define( 'NONCE_KEY',        ')^,lRWhJ~`CJ+4_HkJ#Gxt/?J`J^!E5`THH2YCgnu 1N OA%n@RqhM@r bMoXsx8' );
define( 'AUTH_SALT',        'eqYET6Y@xe`!<%@l`7Itrv/: ^A+L>h(>RA2tfbjQ0`QmlZn&tlI~U*s(>.avKQI' );
define( 'SECURE_AUTH_SALT', 'VY6N }_6nsyY+6E?7}Hou)P[jDu&J/*g W|&SF_pzw8ADqMvl m%!6-SDO+gV|9R' );
define( 'LOGGED_IN_SALT',   'xm4wVBvsH]wHQoysU~e=WWdOW6m$xxA4--$BU(=y|<U0Q4$_RBbt,zu|CIqEwpwZ' );
define( 'NONCE_SALT',       '8!pKry*6.`nnH;)W1dC4=QFUe&} DN36^z^.rlz^u?ZtxK83ii=cP-,r}&dBKn:z' );

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
