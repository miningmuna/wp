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
define( 'DB_NAME', 'Kelurahan_Ngampel' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$yC+:^>x^i q;e8$87KV?seHa4s3A}0%$lDl1RVD:i(ware[rsA-OVzESA:l_;:r' );
define( 'SECURE_AUTH_KEY',  'hYKY`1#yWs vbk+ptb5aba>{7y)}/Egn=Bsv%6]0oebLQHImN;Eh(YqR#xF4uPF]' );
define( 'LOGGED_IN_KEY',    'h!G}|i~_(RN-/OA)aBi]Z!,Zg%Zq7ect5mgPvD1Pt7PEy[{=E0 vkP,Sp=]qG$#[' );
define( 'NONCE_KEY',        'p$=Uo_/J833kwq2f<xjqX22~xz?IMoLB3[<P,OQFAr7aTF+WVJeha?Rz#)AMh |C' );
define( 'AUTH_SALT',        'X E3h-w<j23 ;JkB WU%]g:[-]i~*.Wrj%]IF;bMfzFeU#=_/|+@m5`Yrf:c5pX&' );
define( 'SECURE_AUTH_SALT', 'XGQT,,z/]q.I4;0np71Y^lA!fa&vBgYLOJGIvY8-{oEKzVpF.v0~$(d!7A`ctI8j' );
define( 'LOGGED_IN_SALT',   'X;l<QIKmcVNFxbH)VB9_Ym5c(qwxVjBU#KkL8#%j`&yH4>I^J$bA*r-];W%uQYOx' );
define( 'NONCE_SALT',       'W:>q/<(:iv1gF_*%c/PcL4uTv%CZD}/a,>B= >c-o?+`:.6x34S5>QJ2vSKzle%b' );

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
