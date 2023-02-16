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
define( 'DB_USER', 'magnolio' );

/** Database password */
define( 'DB_PASSWORD', 'magnolio' );

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
define( 'AUTH_KEY',         '3*[=*y&41c6UWxzG0TD[I6hkq!3^pebW@wJU&jg}/9,Z}1,2M~2i+`|8z&daN1{E' );
define( 'SECURE_AUTH_KEY',  'i3cy2ew~mg}pwNCJOGU324F!b)%-Ku2-YoU>o7[>BfVIxHVAPL;;y?3!W FMeQC%' );
define( 'LOGGED_IN_KEY',    'rrpM!@ 0+dho=:*c[B`<fPLefYThBu4,rY8qME^;3v7m(8}GfN_r]RsC$HwR@ko{' );
define( 'NONCE_KEY',        '-.vW|<T<:d$E ;a:-Gv_9qhG @sF}<<i%,mr/B6(+VjW4|E3Y+%_yfuk=6c38]V_' );
define( 'AUTH_SALT',        '|P<$skz}gMY?qqKG)qF-sR%rf6(U[SdF6#zm1h[8LH8__<=)@4|:,{QN@WXY7n{E' );
define( 'SECURE_AUTH_SALT', 'LL%Q@M`/J_s:={0c_j$]I[IPt)3cei<?Ie<;-k^9{>J@,ft^gdJx@O#BkC!QKg&;' );
define( 'LOGGED_IN_SALT',   '!NY.Ln,`(j1e]Q{5Bj<n|M$Tq->=7.iL]ldgtml:uDd!%D|S.f4LJfTe&Z+xB~+&' );
define( 'NONCE_SALT',       '$ O++Z5To~`. 3z0mkm.yWTvc!g1X.EFpP13L[ qHT,CKWu{<py?W>AxuA(9h1pc' );

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
