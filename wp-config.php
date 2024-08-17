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
define( 'DB_NAME', 'task1website' );

/** Database username */
define( 'DB_USER', 'pma' );

/** Database password */
define( 'DB_PASSWORD', 'your_password' );

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
define( 'AUTH_KEY',         '{$I*TiKl/)K~aSV yans}jheDp8?nGy)rc*q#NbHD#=eD=&CuTO0pMtB=eT]SlWV' );
define( 'SECURE_AUTH_KEY',  '*M0i5(>aoT].#IvE3vmq_kz^mYys1PCEd&J[3c_k(u?4md~)unQ/x8Ket=*H>g6r' );
define( 'LOGGED_IN_KEY',    'YN+vs/X,, 4Kb`6/Hp~bQ(m-?ces+N(Aw!,2]~>cvSGg,SM[JcdfWg ip@GT-kw(' );
define( 'NONCE_KEY',        '61O;qa?v1SCD`eDk67t+GRLmLmjM+AW^ L=]*jo/5`69R(}capcCxjSxir`w<wQb' );
define( 'AUTH_SALT',        '!q2Y^bw,2{K9PfCrEit!,IERVWgwzaapM)t*dF{?<20[L|uCLX#oHN#=WsvSV&Pq' );
define( 'SECURE_AUTH_SALT', '.amdS[iE~VGHQSF~RS{H)5&CL:`qY{o!9MH9x#F_xo*EsI,?}H(%be]EO0$[bLfQ' );
define( 'LOGGED_IN_SALT',   'bVkTT+x21*g&l)8%r@{wswhs.Df36-bZr]gI`5sk$CZo So+vI}=plF:;Q}02lNc' );
define( 'NONCE_SALT',       'A8Vf+_9sdApm;Y=349 L t*Tx|zVp]MtVS/x$4|-LqY/wzg3Hhsp3[Ze}(?/pYf-' );

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
