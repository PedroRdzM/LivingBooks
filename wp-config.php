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
define( 'DB_NAME', 'living' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '3KM$8y[ZnK=fJTi.oY!.}6NK{mU3?gPA2+hP~s#=zlOwe@br??[_Xi;A; rwAi@V' );
define( 'SECURE_AUTH_KEY',  'hRPaH-,j^2=b0UK_r&[+6pm@OVdRa#`bCeYz}acVBi;U99UNkFKRK-l|Hgu%X3x@' );
define( 'LOGGED_IN_KEY',    '5aOq*3/mBle;z#B(E=e2&uzmD|GT@||%U-(j8SchkLSMQJ(B(hg[I49XCchpR4K^' );
define( 'NONCE_KEY',        'Z.B=+;Lrp>{-B^q21-yN0)k65%Un@:c-4K yt1:}3v!!-:=^X@Ad314ILSjLb?rY' );
define( 'AUTH_SALT',        ')db_!S{~EFaC2|0ZITy=ZMzrinnKHeT.U /CJR$&pW1Gc[MPG5lNFmm6@taK5@iU' );
define( 'SECURE_AUTH_SALT', '|IAA^Lw`b_rR6enHzw~:g/J:{zV&sdCM/yYlkrhjjL/crof(5agWNjemN|Wa.`8t' );
define( 'LOGGED_IN_SALT',   'S34PyE#+{yh!c_P1v%uLIZ*3=lfv^|{BKbc/Aj9ac^wx8N~^Q>I}M {o,=3f2Z/N' );
define( 'NONCE_SALT',       'c#[rAt=gQFikNUX(TuyT[)f_$]SzQ0)qx[Lf]3%aP3`Vr08OmD`/LZ|Q+9LJjTXC' );

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
