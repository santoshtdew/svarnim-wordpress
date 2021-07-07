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
define( 'DB_NAME', 'svarnim_db' );

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
define( 'AUTH_KEY',         '(kBl``=MW[02r_ew@WuqzF6+?3OS(*j*81]oQUvL_g&kJE:tBQRpWs!3H`JC`%NC' );
define( 'SECURE_AUTH_KEY',  '|x|-.TR]BmD)X G,le_vt*K !k?:}];6|weA3;Pp h!M!l$hItQZ+nieLHbF1 vJ' );
define( 'LOGGED_IN_KEY',    'qt0WZ_UR% <!e;)#r?zTz%7JmrooL1-%OI>;?LT4sm`]m-kYb%Qdsd}knqCrukD.' );
define( 'NONCE_KEY',        'A$6CVPhJ`5&JAlvw-OzU(3ZXOQ7t!Tt<aW}<5EKhNsyYu#VBK_GUhsS#.[<L8UQT' );
define( 'AUTH_SALT',        '{p3`)/kaF}(q]|FDyM.t)*`N=x7lS_ycM3|CVl$3 mJH/i]9;+,m8$=xF,Sy<l)}' );
define( 'SECURE_AUTH_SALT', 'I++;T8.}&P%H~!0~S~~DmN#UTX9,1pUn#$w8+G=s2<)}xW^UB_^))ntZk)FF?)Mb' );
define( 'LOGGED_IN_SALT',   'Hzr&(vNs%Hkq-C;Z3J#ar!dc#]7/Kv@:>3gtxXWJm%f5}zH(,SLfkd,)N}jkp*,]' );
define( 'NONCE_SALT',       '4m[jhjc>7=s,S(c Zx2~ i+&a.F8Uqz7%|Kj=R<VRwgk6[6UI4VydUl;1LoMe)B:' );

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
