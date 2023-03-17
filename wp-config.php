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
define( 'DB_NAME', 'db_wordpress' );

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
define( 'AUTH_KEY',         '#vgdWl{5(mVS2)n;bA7gx{$3!Q>Z(drja?U1-We:R[MC1|@V)QQ)6:<`>!O4^blO' );
define( 'SECURE_AUTH_KEY',  ';_)OVj0-/wV~),^;bZ9.Q#%o788pWx(U6cmufl+0-E~F^ztfq!C&.FwVQ:QjwFsH' );
define( 'LOGGED_IN_KEY',    '{}2EcwE>~0^*d:p.r^Kx?kb 7In1#)52w@pGor!CA7;d=gPQh~UzPvOhv#UX([{&' );
define( 'NONCE_KEY',        'h2.q/,w#XWzHZ(d*,BK42}wL(gk l.1XKCJ1,0CRZ;luTBnU<6qqUR9OKDUe4Q9G' );
define( 'AUTH_SALT',        'n:q{d3/GZk#|2qrQ78xp2m?.xE%y;]]P@ |SF+-&1d#SGZ}m~5Bzy#-IybJX[nhP' );
define( 'SECURE_AUTH_SALT', '-smI(s[?Mg FNQI+#}6pO0=LChEtO^=~tab@w@Og.,5.zDO^YGuvI!)0VRfVh^R:' );
define( 'LOGGED_IN_SALT',   'x6]TFss6d#v,-aUn}UZ0(E}voSqA[t`CdHwG%0yDD|HiU^[WOaY,h9M(Y6m%VV7M' );
define( 'NONCE_SALT',       'M^%n.B p{KH>WdleL)<E8Y(6cZO:Wu!&mR&qrQD=H3w>[tQDB8!0D1N}:$,TK)#+' );

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
