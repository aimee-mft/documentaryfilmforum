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
define('DB_NAME', 'db1204329_dforum');

/** MySQL database username */
define('DB_USER', 'u1204329_dforum');

/** MySQL database password */
define('DB_PASSWORD', 'househorse18');

/** MySQL hostname */
define('DB_HOST', 'mysql1832int.cp.blacknight.com');

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
define('AUTH_KEY',         '5BM<Irgub$o/5PQ-Q<OfdGnRM-e>-<fh>zH7*-B-$#iX!Dx|A1xmE?RO*gY_ Y4N');
define('SECURE_AUTH_KEY',  'BBIGdzj6|8$GA#b=II6p6|?;mDMzIV/I?{&*0UH>ushKfm/h_Z+4]kf*l@i.nUO4');
define('LOGGED_IN_KEY',    '(/c20x:<E,:vkvGJufQUq@Pt|g[><d7[@;IU@vE0S0A|O}QT;-}Kug:7|:;H&=!#');
define('NONCE_KEY',        ')XV,nzK/$M/+ wccPVyh%n=.]B<sV6ImZ/P8sOj](||QJhtnMUo{/)M--B o (!s');
define('AUTH_SALT',        'p3Tn:fTEe>F#*GXR*/&/V/$3S;Q+CO%i+~N>o6 <6}/!?1uJp% n:]8)*mZ-pqaR');
define('SECURE_AUTH_SALT', 'mU>&0/N/hD#vN%B9&Nw(sI+*YobpSW -~w  -*>d9XZ/wi[+si<]KgSGA&8oO?c;');
define('LOGGED_IN_SALT',   '5j_)9pc+7 qM3<ibcn).T*L>2@Ce~h~GwJUHT{~cVx)N2k=<-z>7MII6U/0|6y+/');
define('NONCE_SALT',       '+di]s`Ym`b10-%Xwt]V8;pC)4JBc`3|#(~tS%cLi`%k3mlRi_Sy Xvt)K!fn3~;k');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
