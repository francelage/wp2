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
define('DB_HOST', 'wordpress.cbnkkrwzty4m.us-east-1.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '8Yi<M,[-,#Tl^*(|$VTbMa !47CoYU#F1^[KbO(5A5:XOU3betDWU8*U-upe<vfh');
define('SECURE_AUTH_KEY',  'E)N77W~ROnVIGsS4pbf |x3z(XM&foWMOMBnK3khV$;Jk-,aZ<`E0aceyx;k4At%');
define('LOGGED_IN_KEY',    'mI)|a#W0J-jnsk<S.aOHY}w5<+PV/jI8do>;AdJ8|;M9qz /eUd,_|Pz|,Q[!,Fj');
define('NONCE_KEY',        'W<q+x^^B:VR4OM1HE2#R+yU,Bh@a8aigtp5x`P[0WIcXa^A`ws#xshihI|G6NES$');
define('AUTH_SALT',        'v6>6>&G?@rVZj)?u1)nW??*_5T-O^_ZTG@Ikq72T6,Tg2BZ7#;=ZmC+75v*YE-U#');
define('SECURE_AUTH_SALT', 'GZP_Qu zG%RHu&GWIPae6VNW-F4-,b4!X}E<Y5)Rc?#+LN&.)d,L*oc~>o] fFWc');
define('LOGGED_IN_SALT',   'YbWc%@|O{A&hvUw$e6Z6h~wi$EdDNR<*7+=`Z>qD$q(N*;5HW#1S1I)B>$!Fx^gC');
define('NONCE_SALT',       '$3d@s{4%}u#C3(%z~`zn|3@01FV2Vd2a3L#|1z3p,Eemme|v4Exq1)!9lg=~d}AW');

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
