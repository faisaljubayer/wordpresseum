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
define( 'DB_NAME', 'wordpresseum' );

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

 
 /* Multisite */

define('WP_ALLOW_MULTISITE', true);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


define( 'AUTH_KEY',         'Hrt(@G={@*$0(Fn:8:i_&o;b>5O9<$uh%=`oT^*Z5=(ipdpR$MuSLs$ne-,M&d#I' );
define( 'SECURE_AUTH_KEY',  'k~%x_^RLWR$zrJ0*.Q59xO<G?qZkf[M][CzC7q,[@z%G_1m`|B~X[%zh5p18G9OU' );
define( 'LOGGED_IN_KEY',    '. ^[A}$xDNIg{/FJ0oY26;o1]jE{%Bw8-|Ok02:e(Hb?R_q|&Ml.NMtppRJPW8zM' );
define( 'NONCE_KEY',        'wEghkq}m(_mn=HZogSQ$AlowP0O}aoF72lmIQe%bk4.${|F~t}#$&dy$<7/05ipL' );
define( 'AUTH_SALT',        '$[C@qZ0n@y{Zsaa1k4uaeVgDXVO4$Jfn-T]3uHu%+6G6$xlkV.~V(0rCIb94krrg' );
define( 'SECURE_AUTH_SALT', ';rJXYPjEY?*$2oeR?-5/@v,Q**wo70Hz#z`bFl|1+Nlhh#.jf`^IEn,]P r?Q6Id' );
define( 'LOGGED_IN_SALT',   ' /[XHCTA*`FL$t-WYi6gn2C7,hvhQgvK4I)fA}?!CV>J$TbVX)!w*kyz[hbAq`A8' );
define( 'NONCE_SALT',       '-MkMwXYM&[@CB7oO`!<||<Bo%53m.%@v3s=wxP0%qjq&zvaNxb/=l**t3o&1C|7K' );

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
