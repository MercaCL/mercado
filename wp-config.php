<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('REVISR_WORK_TREE', '/home/renatopizarroosses/dev.merca.cl/site/'); // Added by Revisr
define('DB_NAME', 'devmerca');

/** MySQL database username */
define('DB_USER', 'devmerca');

/** MySQL database password */
define('DB_PASSWORD', 'd3vm3rc4');

/** MySQL hostname */
define('DB_HOST', 'mysql.dev.merca.cl');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'hN7$UyF!7%k|+M`coQjv^cWzLgQ(AT~zlAKs^pE8(WrmMfn2pkgV1L2%H0U0:%1d');
define('SECURE_AUTH_KEY',  'yJ2|46r0l6&9N$4wu`64LM@m/ue|mNPt;vFKMtwx+^GgaQV/aK^&+avI`nQ(S#%(');
define('LOGGED_IN_KEY',    'q3t0?t#o(cmTsx)9%njd(zyB"N8T84&XG(&kN80`Esk~ZmBYN9XpuPp^7qDJbjO;');
define('NONCE_KEY',        'pp+WZ)h&T91Fit5$%Vs%PiOC^ytjxd2(KqaJNj*2od!rsED^"d+i^SXq@htA$;^L');
define('AUTH_SALT',        'olDEZ$x"ve93iqx6E*Tcsez_|r`BYqGNizxR|_xa%RBf+"5OlFxPd(WzTm;1vBic');
define('SECURE_AUTH_SALT', '|27yrPhlD56G*Hosh?Wo+Cgjs`g8FMf(+YL+nvYhGYH0~#lLnD!~eqVDDCjCyZ#U');
define('LOGGED_IN_SALT',   '%CfOHPbdr^LUeA**Cl|z7!i;Hv2R*"7_AWqsc"ns8j(OaDGeJr)Uv~e`PatQ#UL%');
define('NONCE_SALT',       'S0/i/ej)QBK#Z_OtS7JTovN&wbv2!`RykUEf8)m5`svL;BB%5HT$dq@bZBedHvU*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_73g366_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

