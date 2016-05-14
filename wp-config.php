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
define('DB_NAME', 'bg_rangs_dutyfree');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'V7 sKE$!QP=CB0{RDl#a4)!=!Be`jV =%[+nJD0ew}3aB>u*(Me1fi~7_p^SYT8}');
define('SECURE_AUTH_KEY',  '`w9Fk|*H.#`$}-o4u!16WQzb<I>||(lgsXYt.^*1_?>OqZRogkOd@8j^-{hOM@2A');
define('LOGGED_IN_KEY',    '~q_(MQ^o&o6tJyw%Kx-5|:CXS8y&&eaL8Z+((>PKgdMMr4]b6o_l$gJFkno[p+6*');
define('NONCE_KEY',        'W|R+,b+f]Q#]-#%?KZNpkQ.7-c#*u}g9,7Je`Pjl{FeAXnLdWZ+>qbaS|!@*iI#W');
define('AUTH_SALT',        ' xDKNr{Ajd2=lUjvVoSx+g,+%PglF4H85kcDGp5l8]~+&a51|sCOO#)^Qd&p)+TN');
define('SECURE_AUTH_SALT', '*+F0O+DCVL/-Q!qJl`EOp&t{NN%K{9yI%1!+P/VN_jF*qe:(10;^>F,!-+ E^&T2');
define('LOGGED_IN_SALT',   'fE=q<-ng0%N(:^d2&TkKCJSI{E<7.o^Y!l$(?cjt$X{{z2vjZf  VJxY;-.&^UJ{');
define('NONCE_SALT',       '&MC+WM7%E){7!|;IF{(i&V>qL_Q|gyU+Bt-G J4pJ{XlwK6+zK<neSEx,;SrenQk');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rd_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
//define('WP_DEBUG', false);
 // Enable WP_DEBUG mode
 // Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Disable display of errors and warnings 
define('WP_DEBUG_DISPLAY', false);
@ini_set('display_errors',0);

// Use dev versions of core JS and CSS files (only needed if you are modifying these core files)
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
