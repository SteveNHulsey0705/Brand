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
define('DB_NAME', 'creativa_brand');

/** MySQL database username */
define('DB_USER', 'creativa_brand');

/** MySQL database password */
define('DB_PASSWORD', '!ead{lJSF3Ox');

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
define('AUTH_KEY',         ';VR,Pj-m}C89sr6sEOGp1I>~RT~;uVoZ)Xv=MX^Hq,UXlh5R06!e&9:U=beE5y2o');
define('SECURE_AUTH_KEY',  '*S|{_}r*9`zJDwKV.i`M(NP&#WJw5k_YOtj@^*q[r5. D%S/2)2b7(&+onv{.G_P');
define('LOGGED_IN_KEY',    '7en7kq-naiauRGE e<3Yv@;8xnztk-*khLvmCMPdaNo~E|bN,ceW33uHp+}`):A+');
define('NONCE_KEY',        ' ^Kp6?Ju!hJzw>v-oOR4V!nR6~Y?vTcZpufV[[{)s,lDEFPS^Hk>]8[;jz}m;=k(');
define('AUTH_SALT',        'g:ycAA_Yy@#m,I0:ssZJ2nt.8+5Z#;W~Y !sI+hKl>/jvursa[PI7R6{:FiNw<iD');
define('SECURE_AUTH_SALT', '}R8LlZ9JT8v7-5:kQ&b2iXbI%r9dsW%O-(4`- ~Gn^PaS,q5&(9-H[I+RA5)w`vZ');
define('LOGGED_IN_SALT',   'x#*,2~+vN[SJnG*1|,)&slR(n]C/;h[yE8dpgmCOGPz~GG~yYhT1q@ hv&xQ6AdF');
define('NONCE_SALT',       '`{?5DtHa^_3-4n0M8*p>D{Gpz@OCE; {e{P?nrCT`Y-R~nziM+nx@~? #I,Gu7K-');

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
