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
define( 'DB_NAME', 'tensdeal' );

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
define( 'AUTH_KEY',         '#IYm8ECXMZ}Va$v^F&?_Bj/*a18QFtcZCtK<M-(8*hm5(T@&cY5yKF V;60MvNgj' );
define( 'SECURE_AUTH_KEY',  'S_|ui0Yr>oz~FM9F}XN}3gDy:yliw(r*Z2Y]D]paTK5DcLJ]7Sz}V_q|.CP]7(f7' );
define( 'LOGGED_IN_KEY',    '#tWd=ojByJ^:U3^]fWw #f~wXlG8EItEI@< o+>y<Z9u2Iner?LhQ@D;T|D%?)KI' );
define( 'NONCE_KEY',        'Pa@cuWTd[wb~ TY8NuUF7nY80-xU?&J?BEI^dS>nb#V>Ef/Kb_e5a/LQ/O1/r0SN' );
define( 'AUTH_SALT',        'SBjT.Fkf5#VAw>hnEJ^V ~bRI)[$+sbqIT)^nQhv2XT/dWLa|#<=~n&`FvWx?rP_' );
define( 'SECURE_AUTH_SALT', 'G}LRIEwx &S:lLXdO-^G}kJZ ?J,,R6Vmf>7;jn,Aaon@``[LUDRY-^0+vAWcW.-' );
define( 'LOGGED_IN_SALT',   '(cx[A}l.u-^)r20>^y9&rMjZ*tr)#po/~5]bj%p=9Fk$&W#gelb+AIc72c*A}:]4' );
define( 'NONCE_SALT',       ');>cNc>f_F23ODmx541*H,<EUk@{w4uOWZ?$)LP} cpvxg?M,A%$_%6b`7WiXa%I' );

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
