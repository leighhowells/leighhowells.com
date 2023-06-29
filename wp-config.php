<?php
define( 'WP_CACHE', true );

 // WP-Optimize Cache
//define('FS_METHOD', 'direct');
//define('DISALLOW_FILE_EDIT', true);
//define('WP_HOME', 'https://leighhowells.live-website.com/');
//define('WP_SITEURL', 'https://leighhowells.live-website.com/');
//define('FORCE_SSL_ADMIN', true);
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
define( 'DB_NAME', 'lkh' );
/** MySQL database username */
define( 'DB_USER', 'root' );
/** MySQL database password */
define( 'DB_PASSWORD', '' );
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
define('AUTH_KEY',          '!#0Y`sQF;#-L5FisdwH ;a8V.Wej?}|x2Xw0`l44wTS;hgV(N&|1;7V6856^0ifO');
define('SECURE_AUTH_KEY',   'CSX1 mBa#pT1-%?r-8rJ.:5KqgW<[?%KAww6T19ONx!*^4hotbYrHN)T7qy%I@j:');
define('LOGGED_IN_KEY',     '[Pt K 2k:N>a{)y!u`|r9 ($G2H|[_Z.nu*C[C|&0Cj{605c<v*]jv&=L= `iI r');
define('NONCE_KEY',         '=Q2_Mpxb$$}k~]Y?@RSk  ,Y2r`-icF5<SRH(R.tAEwR{5/3cmN|;Ss`6<1V/tP;');
define('AUTH_SALT',         'QRCQmxjB9<y9-$apDx v2f_97px&hdC>{,Njh3}-<Vcw%)@}bjR,-+r#wB ?@Z|F');
define('SECURE_AUTH_SALT',  '$n682D_cRj%|+_r}QrL&C1d0K;XFwU9u&:y49F zS<gGwi[9ie*gb$/6i/8r^mWY');
define('LOGGED_IN_SALT',    'eJyY9Sm}RSqjIZ{7M7zSV36ppue9YY+q6$I]P%MPom+I`D>oZft7Q?6AhXjj.q!~');
define('NONCE_SALT',        '&qO1)&lf>E)Adf!.NW*Bgi*yoj|NducI/^2h6??1lQq/len54kk*%?qvdH)R?C(q');
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
define( 'WP_DEBUG', true );
// Disallow file edit
define( 'DISALLOW_FILE_EDIT', true );
/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'leighhowells.local');
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












































































































































