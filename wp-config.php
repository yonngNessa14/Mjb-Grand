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
define( 'DB_NAME', 'mjb_grand' );

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
define( 'AUTH_KEY',         'oLwp6(pT2Q)bBD0UqLNJ0fy{kTa`t^,,U BY*Dg$Uwt{|:<xcH|(XB%>zhmk[:MA' );
define( 'SECURE_AUTH_KEY',  '0xU+|U*&9,?nW+I3lI5U<FP&y.RH^,Ml2n!9BVs>gz;Usl<&rAjnY!ZYdu7m31ul' );
define( 'LOGGED_IN_KEY',    'ahMdnq0YI]]RXcfiQjWVOX9yQ?bShzShJd ;|?T{~q`g{yO asM}A8Yg;WelJu@;' );
define( 'NONCE_KEY',        '2|;+!|6sD^P4/xY:><fg7K^6ZEE=Lv`?w7x_uGta_L?0.NE)zw!NgfEW,<AHEo(0' );
define( 'AUTH_SALT',        'ydpE0kf jF{Uh!I1?%RPP0ImLVnb,9ETXKlpF6fweu%<<8dRau5ZN>YwAKqR_XM2' );
define( 'SECURE_AUTH_SALT', 'bizv6n/%-x/|4K]([h729YxN+8C;ddnb%Xr=@@rK65,Z1bha--yiQ-W|vo%O_PA7' );
define( 'LOGGED_IN_SALT',   '~X.@K{MODF?K[iGA 8tO_;ew]`1B$6fP)N(t3{FzqG(B;}sN{v:Bh=}=B]u0!%OB' );
define( 'NONCE_SALT',       ',,f])W%UCa}_%L*k@d,:hmob_v2pY}##WuYc~W~-+m>1ZEfkN]KfScL`q?@w $W~' );

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
