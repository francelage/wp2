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
define('DB_HOST', 'mysqldb.c1pcodpxba7v.us-west-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         'WP5qb5eD(%$A^=J$O=i14jh97u8I8 1Gm3N7zj0b[x/u$7Hsqy-aP&w~vT@d;47h');
define('SECURE_AUTH_KEY',  '{3B&vni=rw&ImX|*-uF@<NKM*Ah&#8+24 DP-Sh!wJ%uLWjbZQ774.4Rscz+#bXa');
define('LOGGED_IN_KEY',    '( R|!4#*pnT:T*kYh[3JDZNBJMch.o$4G9qf_UfKor`sll=60xYu!XPY/{s$%VkW');
define('NONCE_KEY',        './Cc]l,S!@-ALA|TR o1yDi^)}2.7//c1n)ro]Y]>HHV4YhJX6d7s[@([n{PQ}Cr');
define('AUTH_SALT',        '7 *BK{9,ulSvd[rp546xq-NG-/nE8CWTP%fiSn-x&D=^L8LX_g`uEI3@uUZw1K{A');
define('SECURE_AUTH_SALT', 'CJBw>SW49s[4S.=X`K,9Lqkg7DGHNH vMy1oI%yjYTpnY!,#4@-$|w3K8Bq3WVM?');
define('LOGGED_IN_SALT',   '{l3<L4+3Oqxt=jsuq1G:G-9oq{+EVos~&oerob[]a)F#V*D$9mH9y>v(]rGq8v<I');
define('NONCE_SALT',       '*?bDMAE%;H`SjoKcKI%mJL2+t4Ls[l0Sx$6fznHdi@STP/iyr5S3;S`&7q;D{K u');

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
