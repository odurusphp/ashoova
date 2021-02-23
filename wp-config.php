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
define( 'DB_NAME', 'jitbawrl_wp114' );

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
define( 'AUTH_KEY',         'rQ}JQIix?4QqE^{QtTN%s315$K1K;w7G!_w)q,t1rJK={i.Par)IwaZN%AMDl]-Z' );
define( 'SECURE_AUTH_KEY',  'z#64fDK)jkZnyk1y*Q{IJB8rD{eAs+_,c!zG;j,5Q/+ 2>aU9q|;okk{qm2C8S9M' );
define( 'LOGGED_IN_KEY',    'A]1ZZwaSj*fg%F&`f`B%Z/T~-w)vDmbrd@}SGwT3^- -bV_1$mYlX219esac A-[' );
define( 'NONCE_KEY',        'i&nChKllBGRw&Ch~xKmb=fAA_EAg]S06,pLG$]FHl)X*]VynSDsa#h=t@e,1*.MQ' );
define( 'AUTH_SALT',        '&+`c*OcY%1X8HPjg-K=VJjUW]miDurBwVr-Q_@B}Z=a3xnk6~ht}|rSBxykO8A1#' );
define( 'SECURE_AUTH_SALT', '8o!kR/GH!eb?TThODdX/ht6Mj{rB/Q GyT3SU1u <^)ovP9hBPwZ%A Y(VEX+gz&' );
define( 'LOGGED_IN_SALT',   'wHtXLWLJ{t4tgY/k.{YqI8D#:F!<pa%cNdY_:?zGXPe-fCkoZRsnMekrD)!V<x22' );
define( 'NONCE_SALT',       'UL{1-sp`K2l`q{fbm!E=5}`;nZiS776yLGa, R)A8h?(p< -312Tk%=PX0D3iJ=Q' );

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
