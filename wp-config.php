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
define( 'DB_NAME', 'kk' );

/** Database username */
define( 'DB_USER', 'kkr' );

/** Database password */
define( 'DB_PASSWORD', ')feymMgmifoaHmiT' );

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
define( 'AUTH_KEY',         ', `Tj[c0Sj2r7/4eYrLWaG@d9pINpb2pxO(]7R}^ *bek+}7SLI&G$8WVA7 !THg' );
define( 'SECURE_AUTH_KEY',  'w}C YJ0Kl^z:ss5T.w(1&vt{f8yQqrH-/#*hFb_3IL9Rdjw6uPb+1!nhAk:^(`Cb' );
define( 'LOGGED_IN_KEY',    'CM<&1.}AE%Q1D}a[5 A<L|S4Mt9KaKwiztFN~6CQMj,WwDncG^U}I|ft1YWl$cy?' );
define( 'NONCE_KEY',        'r~U~var2V?kDfX=5{LF-Xe1CRQ/0A[g{2~xcz]FL~Y(d]<6P(=h0(}iCt}JXZ7wf' );
define( 'AUTH_SALT',        '6bK1(+>I]Utrj6u_qJ-7`}R O!#r>.|b=)8iSv51r#)dh9i7dg({7V2rk;jaW(-n' );
define( 'SECURE_AUTH_SALT', 'VJF_A7%{Rp6t2VZMR67u@c>4d+R D$sg@VJ<,9F,LNTDx0P`x>b2cB8}60G&LArs' );
define( 'LOGGED_IN_SALT',   'x!bS)Hrm+@EC@Jk-cDrHh>)kc @.QQ5]#!K&5#sh$@9STh?hMRh7eo/|t3=t_r=S' );
define( 'NONCE_SALT',       'KBYwR6~CFq|pfl,z|!Hsqdvt;VEE7;>aisHX1iJqhYlSo6! _z@R Y#9$+|if])y' );

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
