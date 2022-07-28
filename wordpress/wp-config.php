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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Mux7>`d@2+lfFA~[$0F#i[<I/n1<($}4f:p!8?IqO=5v0EeC15Dh0Oc:@(SVmA0w' );
define( 'SECURE_AUTH_KEY',  '}/P1[xL*M$P??nw5J?%qwX#;Wn4{-oueYNI~$%/RfjaD0G$9^fJ=QKiUHY@ocZSb' );
define( 'LOGGED_IN_KEY',    'o!p)rM8Ij8vJ[xq|nB~~9$R,iw;W. b5Y&|(VSw-h>#hK_sCtItg}7AS,z@s_nf2' );
define( 'NONCE_KEY',        '&`y|jM<MXy$[Ukd{Dxd`S9s/0)>QdnC++X50n=oe`xwiTV^J;)o46nC&Zm#SAX}w' );
define( 'AUTH_SALT',        'rx+3N) iC1M(Euvf9hCw;5^{U^~=_3{iSwkJ^Vkqe+<]As`vCLYiQ,rOP*`6RSS1' );
define( 'SECURE_AUTH_SALT', '0Ic]%AXK[rX*GNWB^j)@c2_x?tl!T|{>9Pgn{FEA?Nf&y[a@?({TgaH?J-=#<R0g' );
define( 'LOGGED_IN_SALT',   ')$EKyVtdqBA%pnu&I^w=0P{I#,C+}sLbeJ<M1XxJBt|*hY$-CUc4;Za6o7C2d@.>' );
define( 'NONCE_SALT',       '=JX&<?XPyh.i}1*BI#npN73H-1e^H~orVMq!Udz(U;SH76 P_JC{#a;tbtC*0srG' );

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
