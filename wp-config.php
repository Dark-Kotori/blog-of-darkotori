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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'user' );

/** Database password */
define( 'DB_PASSWORD', 'XIN09shi11' );

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
define( 'AUTH_KEY',         'GZ1h]xg_i4`vJN?`6e*oYN3J%68#2* Yv4Bv!JS/8N$4[wMbtN<CsoWaZX+q;6= ' );
define( 'SECURE_AUTH_KEY',  'Pv6RcEHRAXqBQ@iO)./g3Be8{s49@1BqbL:jea{V6lGN@ey]!bWC<Z0YDfSnYXk5' );
define( 'LOGGED_IN_KEY',    '/,A/i%1<47.aT*jrRG-=L^um#JY~(ht)0)y%3MNxz4gTk!q9cwg$XE|a3Q6q`8,4' );
define( 'NONCE_KEY',        'u?r/`^/z4931(+:6x?r(n/a(K2V1hH,.HX_RHM,lBN4K/Rc$*lyuq*x4Us7+_L&P' );
define( 'AUTH_SALT',        'h*v wW,$U7D:zZ;l_Sl1Fdp`;#G<*K49*e51FBDB/se7rp.;2Pux8auFSuDf[wA7' );
define( 'SECURE_AUTH_SALT', 'zu>FUC%w|jr+vb}+yX3!=|%z>_^J),ws.xpOC[e+`}}ZjMy^Shc1ETRi85v3 },[' );
define( 'LOGGED_IN_SALT',   'Dw|?UjEFMy5ic1[UJOYz0`3Pq{-FzaA|gJVl*<0<(4g[<*s5?%7o,XEz_JTg)^wm' );
define( 'NONCE_SALT',       'yr19s{<XaI9W3?LHB[zH%!^`5},P6g27v>y|Ow9^bGsvO /P7py2Fmc,WOjkm|yp' );

//Chinese package
define('WPLANG','zh_CN');


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

// exchange file size limit
@ini_set('upload_max_filesize','2G');
@ini_set('post_max_size','2G');

define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// FTP config
//define('WP_TEMP_DIR', ABSPATH.'wp-content/tmp');
//define('FS_METHOD','direct');
//define('FS_CHMOD_DIR','0777');
//define('FS_CHMOD_FILE',0777);

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
