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
define( 'DB_NAME', 'flgmodise1962_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.%%C};4@Y2fkaNu<T/`)_+R/|z$P0 A?d4i^H)CL#RtTPoV(a.<d?1[Z1T:nxhoh' );
define( 'SECURE_AUTH_KEY',  'oJYJ*zFBPn.ZR5j2.o.Lp9SQAB?YB2f-k`8?]IY?MGb8}C5QIXIct70qJ1wLGQ/E' );
define( 'LOGGED_IN_KEY',    '66FCkpMk#aByz_,q7YfP`p17+o#teVo{sd89PR;FUt.q?PUpc.>4`bo)IjdA!:|>' );
define( 'NONCE_KEY',        '79Z4}h+-lej1}S<GaF9e34}xqvb@Wj;H;j{VWk*jeor(Cr^>.S:}Z*YET!rrSKc[' );
define( 'AUTH_SALT',        'Lj/Q2Jzb!.+5ET)=Qi^%AB~&SiaJA;  6Sh`e3# 54Ojmg:s?N!oIU?#^5}ru1a5' );
define( 'SECURE_AUTH_SALT', ' Jl(1qg*xj@,Kw$(o,~+/[tXR>a[|[}&=ga^?_+U)_C|Q}a>56eTRwpt^M`c(tbI' );
define( 'LOGGED_IN_SALT',   'P};{C&cW`/~78<h c:XuR;Ta]t1eiplul;q8bM@BYV.;m1^+UDMj?;W_m{EMu.Np' );
define( 'NONCE_SALT',       'O5.J1RU48S^!A>2Zg~qEKIjO&BtJ;nMd6Il@=$i~L#@V(-wn]};Iqwb}Xlxyq1!E' );

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
