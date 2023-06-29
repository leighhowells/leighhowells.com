<?php
 // WP-Optimize Cache
define('FS_METHOD', 'direct');
define('DISALLOW_FILE_EDIT', true);
define('WP_HOME', 'https://leighhowells.live-website.com/');
define('WP_SITEURL', 'https://leighhowells.live-website.com/');
define('FORCE_SSL_ADMIN', true);
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
define( 'DB_NAME', 'u323080344_lkh' );
/** MySQL database username */
define( 'DB_USER', 'u323080344_kentonme' );
/** MySQL database password */
define( 'DB_PASSWORD', 'QR3LeX20!!9YMz24Lgb' );
/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3306' );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',          '%-t_0m=S|@MU?$xf2uix$t~_?T-)Hd`w?LV|-4bVr`PpZ(5)&3goU/T8i@9`#u!P');
define('SECURE_AUTH_KEY',   'm/-(I]L21CC.6VPr)OE7,{D^a5|iy`1~v&<lSombDtZ+&U<,|q;.pp}Lsmo:c+D>');
define('LOGGED_IN_KEY',     'x-tGo mSt)+rSleC@R2vq~#d+%sR6VxS}&v[XleR%g9bPXx>A aM%e-h-{BB|oa*');
define('NONCE_KEY',         'X,4,y#.qSzQkes&fgTi`o2#,DVYz;xn2}KrS1}h))RX+ 8!BY}~7aX#9)p|b/@az');
define('AUTH_SALT',         'Qt*=12QiC`}C1Az6N;woxv#~WY-),C^_NJG7+MLiNP~(NjSd}uTY>C9{LPZr-sC-');
define('SECURE_AUTH_SALT',  '{KU5tUEoC2nP-c#kM8vuypxt+2>SC+qVV+;m][)$#{>PWnP&X{3H{c/ fY+_1&i-');
define('LOGGED_IN_SALT',    '+w3bL->T).&G-=Rof[W-*I&RpF@v=Z5q`5xuTBhm#9ViizS{I:/jA0#3+[0-d.fZ');
define('NONCE_SALT',        '-RyGG;!$mYX 0y/wA+Xvjq};S>5fPQ+c}:8ZzT&.T<(g$N#+~PdlAnTeV/YS9Z?.');
define( 'WP_CACHE_KEY_SALT', ';%O3Z xtz86LeqTf5`8;K`vFX;}Wd?}vtqa.1v@zy:5!GlKQ>/JS:b6}d;xY*#}+' );
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );
// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'www.leighhowells.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}
/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
