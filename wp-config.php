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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'DiP?L4R!?=%E@|sw)MSa/4B]l]?45#ug}E)BY!Q#y1l;5q(a:sKJ`?_bBGeQm4*&' );
define( 'SECURE_AUTH_KEY',   '#x4 kW<d_[c-SEOC>T?m7M>&!teb%xv(?.1QiO(y{3us&n`e$PiJJ&6]kXXF:, ^' );
define( 'LOGGED_IN_KEY',     '&N8lM`=^{{h18mKKoHdv>l`fR0Lczf2Rnk/Rs>,0CiNI2Cu& TeKI-3aj?;g?*1b' );
define( 'NONCE_KEY',         'N[yH3 3cB{|R[n1j;v]<)[wtUW[6p7q&XMW4]2`(~}^g^=l~lzpehX*$7(Le.0H!' );
define( 'AUTH_SALT',         ',$;qom$F.Rkg_LKiwI16CV^J154s].mS[nwnpZcM_XlKt(y:p+C?v(ilP.MNVpf@' );
define( 'SECURE_AUTH_SALT',  'Ue{XoH0|6>[J!+r4Fk/v 7x^x5?/N;KQ?h#S;c=wDX6Tl]H(|5lv1ns4RQVzV!{z' );
define( 'LOGGED_IN_SALT',    '${%upCend)Z>kLJ3mrQ(Ju0R5<_KECH;%99K+5XKv(F^mMOo0}vhc$M}a%#[d/&b' );
define( 'NONCE_SALT',        'ExXZibL0B*P2$WlEa7R#s+,= )_kS.f419[!TB[K4l,v])3AWaqmqb2(1TpQq#]B' );
define( 'WP_CACHE_KEY_SALT', 'V,+8Y40U5Y^I*{mO|~O[x`xws/BOk$J&GzI+e,qI]SlMQ)iYQTEj[ImFuZ=Uhm1{' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
