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
define( 'DB_NAME', 'studycanabroad' );

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
define( 'AUTH_KEY',         'F@m4m4agI3th$o$Y[vT9j*Bs;1LO`)0tu5M(i{O=^,7`QXuA^?n}%DAe^1`Tc9uk' );
define( 'SECURE_AUTH_KEY',  '=u}5J5cynKc= 9}MQG6PQl*TPm?tTe-e$]Cy{9ttO>ton2PGc~92k5u;_oIL|_WR' );
define( 'LOGGED_IN_KEY',    '}w.%<X@bT?hx:a7%#1G.n^WE}6Jcf kt=TU{Bvpp({Swu-x)ffDMi>UJB.0Qi}^:' );
define( 'NONCE_KEY',        '[-$&u1PjX>DF5f+]Hn#@H&ag*O(ao@mjT3f<W;f6!~6eGeU.,Uex*.YY[:]_||5V' );
define( 'AUTH_SALT',        'HO| 6g[0V~SLkcxL:[z9n4L&[F1vP]6Q_#L*CAnB|~|I$YJy}]1|oQ<:H8Gl2`9;' );
define( 'SECURE_AUTH_SALT', 'iio30UHoKf~!F CQhj^uXh]+;gM5F/)WUQq>R]G^]q&RE<KjDY|]eF2:SX&2@}Pr' );
define( 'LOGGED_IN_SALT',   'vaL^0rkU5HA}0 l>$#(1q]<)69([Jl5v OpUcWgr??mI#r=#HqJhsrt>K%<XDhPu' );
define( 'NONCE_SALT',       'r^|FJky[/}/tQIpNZ?l6(m}6A,A**hQAA2^/40GZv.U|1T0s.mm9kAMd=qnL(}}n' );

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
