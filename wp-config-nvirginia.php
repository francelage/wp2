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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'mysqldb.cbnkkrwzty4m.us-east-1.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'nQ|C$=_N/(K,i LlzANg_v6Ql0uBTc@#H}/pwjV?84hg-7Ah3K>JQrsM<L>*W#,M');
define('SECURE_AUTH_KEY',  'vJM^{Fl9 5?sx>Ch,eAwMN4k(8c/+oQ7`H,$_=sA-4u2tf>DW@mwWj[mO>8ON%uj');
define('LOGGED_IN_KEY',    'p)3!HU$#L)we* Ag toZ*@}_]9iuBHxQ}ya9rlh>8Ei5P{ j`tF3.Ar-WuPzZd!*');
define('NONCE_KEY',        '@Zo|xn}jc?B9D#Mu7d9{C/&`=o`^4.GZ<48f2,()}A*b:v+ ^hO]K1^<Qtq67q6@');
define('AUTH_SALT',        'kD7GI+iAog&sZpP+WhtGQ_]}BO`@e9T9N*]#Qa/r2rC4RGV ?{1wD|Om!5y:zd%:');
define('SECURE_AUTH_SALT', '^+[BVMF{LAc6htnJk;(Syq4w+u|4A,:1+@P5SNEn&]W.jr6Ar/p,lv7ouP3z/(2=');
define('LOGGED_IN_SALT',   'y@(qN4TN3: Ojz|aqP4y:<V]|6ev7Dc6C8(W&uhF5ifa3Ka-m<eqM-7E^6(Y^CNk');
define('NONCE_SALT',       'Q5VrUpVr^W;n xWj?p#uV:,&m<Br)j+T^+m@K+pX(JYK-w1j^}z(%MwsEK}qIX|#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');