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
define( 'DB_NAME', 'playground_wp_wp' );

/** Database username */
define( 'DB_USER', 'playground_wp_wp' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

/** Database hostname */
define( 'DB_HOST', 'database' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '-4G^dw2kuh+tNu`u|}H^&]kQUTYx]aSV4E3i_D)QgAu~MfwtrX`6iASB@d{F!@o4');
define('SECURE_AUTH_KEY',  '$o=Zu_g0u2.QGy0zZ08bhe|@$%5)I{y9-_bWO/y;]vuptLZZ[Q=39JW^dBZ?jHK@');
define('LOGGED_IN_KEY',    'w!wOR|ND1DnsdWBkSz~;Fq+<Z`Gm+CBGV<CV=8ZQUSosT5$3U(]XF/ujku@`!J=;');
define('NONCE_KEY',        '9{4^5]iM6Y]Q+qQ+9Y.,Xs5|Mu#{cG.NR7J_.US w{d #VKdeuARM0f-GLhm@5u+');
define('AUTH_SALT',        '+~Mf?W+Ln%o-%E6g8q&)6<>).04A*jXz?uzagW|.Cu5J0:UjR4zg@h4e!uAr>rPR');
define('SECURE_AUTH_SALT', '1iw~RVDW6:hS4o#`|*xJaJo+nd<X-zI|TTBxom|HmU_~dxiTaS8|UhK?k!?fk|uo');
define('LOGGED_IN_SALT',   'Lv`4!jW^HKVd1.Wjo_n5:6exNX?oe,xnL8[GSM+qdaG:77E-YXQ??pR<Uxx@ %E.');
define('NONCE_SALT',       '7q2G|ZxlNQ pYE!pNS]2:Vsw:*)tlL-)?7IowZUF+(T74gY@MtGdb/]?g>;6V1b<');

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
