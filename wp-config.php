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
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         '7lqphxifbgjppz7ah7nctjp9z86ph7goxps46jaxn16pqzerckwkvkaqim4z4ns4' );
define( 'SECURE_AUTH_KEY',  '1cvsaijfyklp7txfj1ijgfzmz8vhdn6sfkuzocdkhni91mttlrhgd5eyumhrwtul' );
define( 'LOGGED_IN_KEY',    'zvfeblwwzgotfp0amozdcvwu90a5liatjfzhdfvfke4vay8ovxzudo3oft89uhum' );
define( 'NONCE_KEY',        'd3s0vbuxkfccka5t4sdldohxafw94fmsfqpk9obutdzhmm0epictxvdzvxfwhtxc' );
define( 'AUTH_SALT',        'vx42apwq6gv2rxaprx8lqpjl8x5fyflipu7ohbg7tb5q32hn8yiapimxhu451gbp' );
define( 'SECURE_AUTH_SALT', '1rino8hetajh8ndjzywqp2meuqvho1dfohh0tyjdzihl2r3gqjbgbywxbcsifuar' );
define( 'LOGGED_IN_SALT',   'lmao44gbmwmqipe5vhzgouhxqvgk7cskx9azqia4kmxnpbshiu73brxm44i6uw6t' );
define( 'NONCE_SALT',       '9x2qgnpepwkwzremnzuze0oisbxg5dmh5wa5hjwrnbqotsb6cs3hpfni3hxpy1l4' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpor_';

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
