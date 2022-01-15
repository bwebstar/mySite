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
define( 'DB_NAME', 'new_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',         '%MQEa-[b5[&~WXm03kKT{!% 4^!)t+9^:+SMUy#zS50?xsBy%T`{jkBwh3tvWdT+' );
define( 'SECURE_AUTH_KEY',  'JvPX, k0oNO%iea)GWCO[kq#GqdTw#PjLCvbU[7MsggT;Ri,Wmtlg3AjxCMS9s^r' );
define( 'LOGGED_IN_KEY',    'ZAEeZ|o_5k>W$! 6 fh;xa}6 sqmUA?^=QjNH9DCih-zYv7ux`5~s-[Mx_kWdZ j' );
define( 'NONCE_KEY',        ']{b.UkvJX`E>Rq}q?F/n8p3!SYP@O6E{7Ho/&|gB.zBmM.8DjY2;TJEvJ#Qs(I*!' );
define( 'AUTH_SALT',        'DjjU9|rc| 3&#3X7iC!Qqo!}WZ=BlO!PPP$uvX;qz5Vc}m&Lv*RO?v7AfuIB~j!X' );
define( 'SECURE_AUTH_SALT', '!Xw1xPx|V-b3x=yeIn+!nmOr}]wuioW+sa7#(~U{a>vg`+9+Si&>]1S$5a?rBw Y' );
define( 'LOGGED_IN_SALT',   'ic:1tCQ:.FtGT6h1v&6/[7-Pe9:pbUU}R-f,(q/t5[=aQ./7Yfriwj/[4mek&bfi' );
define( 'NONCE_SALT',       '.ocy_ckH,^fpf`XOIOb[w7BA=hLctw87{bE H~k4w&MQdg<hc}=QO(?vY)W{m4=N' );

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
