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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'greatssystems' );

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
define( 'AUTH_KEY',         'f8Q]AZ2Q_S=YTBr!v9;VQ1beDS&zE3Ac^_Xw]BIsR?HbgMNO s0_Vm%i0Fhop[@~' );
define( 'SECURE_AUTH_KEY',  'Og)`,a(>NZP&Z=JafQ)nvh22r sH)Uu[81NL1E|l!~TKyE=tsf0RYj_R09]l},@$' );
define( 'LOGGED_IN_KEY',    'i00Z2-{aGSQkb{g~m-JKiu?JXVt^bAL+3%bRr(C2GZ_^Q9v~n6xz8CYiB0C/1s7I' );
define( 'NONCE_KEY',        'ib<!SA<20SD&9Q#,ZH`|:1n]6XVVnbp)hg%8zWHJ,qrr[0]0AhvRW9s*#Y-+=_bV' );
define( 'AUTH_SALT',        '6qFhizyS)GBL4s0xiXigF1vsRiCp.i@E:q-@Mbs(;4SHIKp*t+C)1-idg5y[YWxM' );
define( 'SECURE_AUTH_SALT', '=$uG=3qpne%^(mFH{&>=d.:`]GfskyR6v*/or{7jUDJBL*Ra6(0E3>>mAv7NqAL9' );
define( 'LOGGED_IN_SALT',   'y}s<aKJMYY7T`-H2P:;kPjz hs50,gp[4?Vp6!02gh3kz&GTFPi;l[>6_z*Z]elO' );
define( 'NONCE_SALT',       'h,O ;k&K=zoJl~8*6d:wxZB-TCn=J2N]J,{#tqaW%X7W/!^?PfTS56!E,IN4c4hc' );

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
