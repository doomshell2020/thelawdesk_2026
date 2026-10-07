<?php




define('DISABLE_WP_CRON', true);
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
// define( 'WPMS_ON', true );
// define( 'WPMS_SMTP_PASS', 'lokesh~@123' );
define('DB_NAME', 'thelawdesk');

/** MySQL database username */
define('DB_USER', 'thelawdesk');

/** MySQL database password */
define('DB_PASSWORD', 'thelawdesk#2@26');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');
// define( 'SCRIPT_DEBUG', true); 
define( 'WPCF7_UPLOADS_TMP_DIR', 'your-custom-tmp-dir' );
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~L_2.)xUf= iUi:8tj0T}>~d^C4%CY]Fha)ba#5||l[ bgL&Kfm*RG>^;t5sgA;*');
define('SECURE_AUTH_KEY',  'vCJx|i{_>ec4VVp!@|)w.K:Qw2.]wDj8ipD5- dTg?^UWoJp!5.[5v3<zytq{g9p');
define('LOGGED_IN_KEY',    '^bTb@>Q@AcO,`A)gup3h`[mbjj4Q;u64XrCTEuk%LQp0J+>f>x%=F|@@&#Z1c~W?');
define('NONCE_KEY',        'aex]g1ahl%Y7rfuM{>5;++5]>PgaG//1W0LL-FL+qIe,4*U]5qdYlGEq$-Jj(cF:');
define('AUTH_SALT',        '$UiZwi1A:25m:[@y7X+=mO5P3Bao:ufckkaGOm.tPjM??UW4SeDgcpc> jw%X_t6');
define('SECURE_AUTH_SALT', '+EdcwxNy&gz~nH.m.RA@[B.r<yP[cl!%!d~.>w~Vwvq7Zk`nLBv9eyo$4%V}=|![');
define('LOGGED_IN_SALT',   ',`~~EzgVM:Y>ygEWZA2t+!sOA<#fYV>sH2NL+N8thvFcYOyCDs{e3WJp)m!%@!=$');
define('NONCE_SALT',       'fAmTiF-Mc%]Vq,iaBY^t9*IXB.(v75i}w)(0/o{eU:FN|K6_Y-SsI-:13n6#AP{d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'zjlvz_';

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

define( 'AUTOSAVE_INTERVAL', 300 );
define( 'WP_POST_REVISIONS', 5 );
define( 'EMPTY_TRASH_DAYS', 7 );
define( 'WP_CRON_LOCK_TIMEOUT', 120 );
define( 'DISALLOW_FILE_EDIT', true );
define( 'DISALLOW_FILE_MODS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
define('FS_METHOD', 'direct');


