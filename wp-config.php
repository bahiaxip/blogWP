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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'xip' );

/** MySQL database password */
define( 'DB_PASSWORD', 'cali' );

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
define( 'AUTH_KEY',         'B=HRhxKI0aSa[7_`D.cmGIt)K1g}P<17cZB~QOpG.-<rg/,nKSrKJR;QBh::X0`&' );
define( 'SECURE_AUTH_KEY',  ')p]sNH1]JS;H0AdwEHfG4TK41Qw#mbZ9L^{y?_LJ~MC3gr?mdQ|O-5ggUY~|KE3&' );
define( 'LOGGED_IN_KEY',    'cx`YM{B2{DIMYC|!ep2%iURY[Zg9mfD/x&*ne}+sH]_Arw$!L6jly`R|>PkYGbpV' );
define( 'NONCE_KEY',        't2&0NSj6S1co`8I2<2TzTyHU1.yIf`tfpL^EU05D<hm{[l33fNVD,:@dMX*-W]}X' );
define( 'AUTH_SALT',        '3${KfNVW.kb?5Aol4GvF.c#{%%{^cQOd++=tPH>I!57Z1sYcliUd=c%hN}oF:)w4' );
define( 'SECURE_AUTH_SALT', 'G7QH[{W(a9pHM|:4jIY-6Q|zsV6:lS[tDlY0B{22waSs#Z!&g@vE2sBBc9e0/:d3' );
define( 'LOGGED_IN_SALT',   's?=VL{mss`XyY{~&m/@PGUn/xYd*!t!Sf-!N&.8Lxv#rT+LtkW([q~HO+mH0S{~o' );
define( 'NONCE_SALT',       'z}^0ip.jHG%y{|.liQuYT[<W0<_=.__%->hwfP+n9[%c%vQ#_0b H5=Zd})~FGfE' );

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
