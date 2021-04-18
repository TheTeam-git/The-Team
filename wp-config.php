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
define( 'DB_NAME', 'viacoop' );

/** MySQL database username */
define( 'DB_USER', 'viacoop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'thos' );

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
define( 'AUTH_KEY',         '}MX#QF+&GB-r):`H(svYt+_6{#LxGQ6j4(IJ;bk2QW<U&o~pl/`rxy+Vr %-Bf2N' );
define( 'SECURE_AUTH_KEY',  '[0bGO gI0Lo]ocRGOXW8T1`a%BXz&N@JOC6]e}4Vl 7+!(WEdcv v:z}Fu@GOC-{' );
define( 'LOGGED_IN_KEY',    'U4f*,;81p*nK}R/e,k4y<Lg+$,kn4|;R:U$0!>^k1j$QXDWL)Te,y+dw#:>R:j/0' );
define( 'NONCE_KEY',        '$:Ix&F:hjvt)x,#u<+wl$uwkM]?3{wa8@>^Xe,Lm8C]UW{>T8d=*btSnO$&FHk87' );
define( 'AUTH_SALT',        '7kh;_T.:=[:MtB<nP)4m=q5;?-o0(<6{JM>|U]v,h5*Kv]D7CtNSV*p ]E@k+M%1' );
define( 'SECURE_AUTH_SALT', '*Ra}s<~8+*_VZkY4|f:3xO3H2_]]kmG.i*5~3kL2Zi&R_b1;44[iRq=Wm.[tH$ti' );
define( 'LOGGED_IN_SALT',   '!z%YpDrFRYr b^|Ml+ hc6-A=UQLyYf@5;BgH)~Rj&,s#U$i0Pw{,eIu!D_xTHU:' );
define( 'NONCE_SALT',       'J[-&6v@q*j#A 1mC2uG=$>0pNIy&64-m/t0+3GGw*4zv3OVyqvp{hy5hL,7UlQ64' );

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
