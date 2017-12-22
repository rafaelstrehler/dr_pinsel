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
define('DB_NAME', 'aerztekunst');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'z+.bT$=^4:9!j[&0C(|-RYhTSyl7N2R#z<ZS~0Bg?t.G|2?6-9F[(la~ w>#F+`>');
define('SECURE_AUTH_KEY',  '|K!lO:nVS=Lz7DZ6kg?f/f#`{kFWy$7lxRE(k~o9hs_J~(}ubOaHyfB_K|Tjg-Zg');
define('LOGGED_IN_KEY',    'k_q 3T],~:MJ&X(kX+CnpePHOF-p19KRZAWIfP:Eo7%Ufk=<_O0bu2Am VnyRaGy');
define('NONCE_KEY',        '`S$3W%8Or<hg>gW0a^EVvO,cb+vdzU;m3Oju<fY!Ytl7p)Y|ux!x.O2?.7hYvKlJ');
define('AUTH_SALT',        'h7HQ;=Oy)F|mJDUVo5NeupCmq?hENCJmfN9%e0`#ORIYorNd!9IA=d9,@B<n<uT[');
define('SECURE_AUTH_SALT', 'ds+8e =zgbX{zUV<S-8pcPK`ZMk^Y2}QiO[>rV`t$1T|ahffh%<c2T~+IfEXWoG>');
define('LOGGED_IN_SALT',   '?w58wv=&EK@om64w|P:Y8WO!Od+_Q#.LN~#SN|:wNujW#JN<j=F?h7ctcN4#!<K-');
define('NONCE_SALT',       'GIx9As<Y*.(6WoZcx6r-$Ma`>g|QFvlam~I1E<Ix(pnWK<$RrD=#cq~XyO{C:wkz');

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
