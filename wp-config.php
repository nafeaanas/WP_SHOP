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
define( 'DB_NAME', 'db_shop' );

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
define( 'AUTH_KEY',         '^m#})V,V ?sQs!Nw-!CZ,KqW+fOtYuAJA<!X&8V/5WG7ED`^hs(%Up| dRKKKxA]' );
define( 'SECURE_AUTH_KEY',  '^NG9SE>x~/S-d_x=N07onzW}#JAw :m2IVp8fQn7}gLi zjs~f;QDd$,ek?mNxUI' );
define( 'LOGGED_IN_KEY',    '~I_#jqcA#A!/RuO5VWv$RCw^OT0%9V zLSVh^Gx@>,GtHn-f|Cm4 &SP%}( LHU2' );
define( 'NONCE_KEY',        '3.X4A2T[,dP&ff5C/{At,G8_$LDw}ssHl*bYe;M!< KYb5t>V2oqiI!F}xVPZp8!' );
define( 'AUTH_SALT',        '?|_ZXqlQpi~,/TQ_~t3a3#Z]C9R5ug/%NKM=3cPBCqhb<UjN@MrjAnlMp;jnwT34' );
define( 'SECURE_AUTH_SALT', '2/ftmeUsebYy0U_7V=,aP2}:yOj8/rL|JrxofoT$CE<f2#.,Q71jR0-.yf5/!VU`' );
define( 'LOGGED_IN_SALT',   ')dS%%6CFc&Z_.:Rc>q%k$g%YclsX<?i]m:q9yv63q*o]~yVd&6JV:=KZUf.J~xG5' );
define( 'NONCE_SALT',       '5jP /HTTOTB#j$MRay_vJz^2v}iI.P`G:Saf#pZ_kz]&QJ(=1Oj!I`|(e=|1alLT' );

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
