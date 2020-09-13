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
define( 'DB_NAME', 'dotgame_db' );

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
define( 'AUTH_KEY',         ',7y>%3u-L$$=P6X:Y0/.Eo5YR|WM42cLZk~hN=v,F=mIuHXzL>Nbc_GEGDB|: 0:' );
define( 'SECURE_AUTH_KEY',  '_P53d}GW0M@7wx{eC^}fp6aMIO%g=&XgN/AlD8oS LQ5=3G#+v.XbJ(P<^HY *]B' );
define( 'LOGGED_IN_KEY',    '[qcDP*8Aha RzOn  UDm5[=0TZtQZkoJ;p{@s!G>|xR4cN A9>qXpFCklOQ<KUK@' );
define( 'NONCE_KEY',        'Tuj6jh:e8B>#cAF*Em(W`@Sy [~<+JW+-Pr{;a?y4LSxwp77t/vRua$2 ym,igq_' );
define( 'AUTH_SALT',        '7UrR#|ZSj]XgvMKTG4XG>,ZR-GYM)@}GAip_Et{5VySYv[9,USW_jq1:b:4Yj9|#' );
define( 'SECURE_AUTH_SALT', 'XXb{-xj@*D-C0<}QrO`.cd3bLS,DwR&cNh^C!F@cD$Ygba? 0qs$ 3-=PO9sh?0F' );
define( 'LOGGED_IN_SALT',   '{~.>d?Cek>p9y)E fqJZCg0y!d[~B]kNj/=1**D0<g#gWtL!+Ouf%@CUX]1GqT(J' );
define( 'NONCE_SALT',       'i!<2^)+:Sq>@b0#q?Bi~N@pLfJuRn,/ktq!2(q{TU,6b3qh=oA 2Z/So5MVO!Q@O' );

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
