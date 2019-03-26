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
define('DB_NAME', 'dermcb1k_dblog');

/** MySQL database username */
define('DB_USER', 'dermcb1k_dblog');

/** MySQL database password */
define('DB_PASSWORD', '(v7Ry?VaDa]m');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'T(!Tb]d0{WI]kfxA6zK,QC_yB,?{ oY,;GtZ :c9S1/_4m4#dF/d-8 %JtD(Q@ae');
define('SECURE_AUTH_KEY',  'I2{2=O+(>AfGO1N%Z)<8Y_{F}Oxc| 7`v%3c^dHs/],$eC]q7=h9b6-DUf]K=Rgd');
define('LOGGED_IN_KEY',    '/6p,5ZrOYDnHG?0u_=)%Bew!I>2u/G|ka|{NMF=94P2-Gx4R3py:uzAWP?7rBT,r');
define('NONCE_KEY',        'Wub-5{yc>!)V,vJA4Db[Quk@WUrr?Q5^+ BOFZ](0f_qBPKrm)4sJYkv ^xN$<9V');
define('AUTH_SALT',        'z0PzKi [AF8A1VI=QVqe*A+#aQk*`J!6)tB8r5Zih3Ka(_s}p`x-)7^G+bLEn-w9');
define('SECURE_AUTH_SALT', ';quVW@GC ZsDM-],3P_Ll~{{@n-Bavh^_[p*x6[G@yQX/0&H@riA =w~`)` Iby@');
define('LOGGED_IN_SALT',   '`lEQ$f!~]gt*l5g]`I{=`*M]PqSV%nc%7;.N/Q9T0V2H(^~_k~Sgo)L||]k>&]Rg');
define('NONCE_SALT',       '_zDsK(>qlD7Tk!Wp!*Utb@}#I/Jmwc om&Xjg*c6~uK[LL@~2byfidz09PuM2fi#');

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
