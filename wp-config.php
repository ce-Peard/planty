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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'planty' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ' POqT],Fyyjg;u$UhE%<R|tMHRU:5eG`Js`By2oWV#MzpUjqp*2ae=~_(QD>V<`/' );
define( 'SECURE_AUTH_KEY',  '[W*(/yHbW+q/jN,Z*G-8v!Y,2jX~)2C(1TXql=mng[|`ih3}i]q%-?M#pymUWP|^' );
define( 'LOGGED_IN_KEY',    'LkP6YucCyb+_F5!:qI`l_<kLi.w5DdW8ppT@(I^:y#;+%B5QR$/Jg7$`/`GxbH8!' );
define( 'NONCE_KEY',        'jC`L{ 2;/AEcExax6o98.<&gM[A*r#hS3>4SV&~jz h4U?p]=F~a+]k7KG98ntOz' );
define( 'AUTH_SALT',        'T-&{ThPO<O*B=yh`+tUytb3=4?4-`!uG0]avU?83L^5qmMf,Xpe)ni0`TW(=K4( ' );
define( 'SECURE_AUTH_SALT', '=$+u/Sa#yhvVd}I10,t-Bg Q@W/uMJF *S!JGStGy:I#*SeA[r%.idN^w5mY26$<' );
define( 'LOGGED_IN_SALT',   'bkaZ],CXg}!GX ,_29O:oY`V[/ePW/xK0elT*J=f(cDvHx4[DF;Q_wkwQE4TRn+A' );
define( 'NONCE_SALT',       'A:Vm{:n$9E4 %W:00<=sf4u7=~`}|D785[*HP$E[_O/s#a:Q&@:x|E6`T_SZw@l%' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
