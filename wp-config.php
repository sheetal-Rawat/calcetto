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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'calcetto' );

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
define( 'AUTH_KEY',         ')_$j)NTFrEI^c/-CKZ(~$TRO KHE(v[Yei;=~Xku4%%}QHY$L =s8{Yl|ld{Mlyl' );
define( 'SECURE_AUTH_KEY',  'B~,YhbW{*RD1]P|%+LUH#r2l9o|{a~W/w#:&[5nxMl,tzCP(@qZA3vHZ8xvn$@cc' );
define( 'LOGGED_IN_KEY',    '-qJ2; ne[RBfk&&2AUpDY<996.I7/Dxw8<U$SzOVn3058/@#&u}|0pBk4:;9[[{Y' );
define( 'NONCE_KEY',        '[,Vh<Nt/6$;t6b_S:FWve<`enCm3$hz>n_!o|lCo[OGko5VXF$O]Cta|EuX,JcL^' );
define( 'AUTH_SALT',        'yGI^0);}* V{wZdDq.*D<E(V=siN8M|+~4|z@`n4edE%SNk_]3JO.*Hv%gX_z8JM' );
define( 'SECURE_AUTH_SALT', 's!^:g y)konU+x&4S0SVk+k-dU6A#9arXS_}~fv 13aTNWiqC]!P%[G<4vB`J{sa' );
define( 'LOGGED_IN_SALT',   '31^|]p:P:uF+G2q|25;{rNx)Gt6JOI1+Uz0qLx/=0@@4Y:/ON!.1 q2NuJ1y)BJ`' );
define( 'NONCE_SALT',       'I=Dw3(o1@K)fF;M>|14HK304?qAN+Y=?d gdvD.WK>xyr-)!K}ioO1)L@oXU5g5q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
