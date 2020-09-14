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
define('DB_NAME', 'ea391799_luther');

/** MySQL database username */
define('DB_USER', 'ea391799_luther');

/** MySQL database password */
define('DB_PASSWORD', '!9pt04Xu#Z');

/** MySQL hostname */
define('DB_HOST', 'ea391799.mysql.tools');

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
define('AUTH_KEY',         'Rb((MEBFYsxWxG3QLVgd(#e8POWnKZUD3yIkf6BS09p2Z!OAkZfnVn2KZfV4ln!^');
define('SECURE_AUTH_KEY',  'gt&wGxcM7qFT1aNVg(B^IX1MecBJzJa(pCF%7L^RjlaqCzSEgECjcw6JG07F0%wg');
define('LOGGED_IN_KEY',    'wSBDLtWh0#&CgWi)gEnDIwf4IZOK8Yhjrv9O@hlb7oz7jeXUR8^vFYmRhise*1fi');
define('NONCE_KEY',        'a(tV3#TTpTG)m6hqg)AQY1JVPjL9*k@r)Km#y!7DkLCY8kCT5mYi^Am0^su6#Zgh');
define('AUTH_SALT',        '^0Lt5j19A7Ls!pB2&Sbgb*WnaMpyY*M4qWilbqxrodIhso3RHB(rWSWpbpcMXc^x');
define('SECURE_AUTH_SALT', 'qo5Iv7K5a#MA((4M0NAi)w&!@Rj&CLRki5qBuw9&54IgL)nax5vXD6mdZHEaqyCc');
define('LOGGED_IN_SALT',   'OGDa8VTeT*o8SF)Q*wSJz#3Qv0*kr9Hmhi)fsOd9cStx*ZaCwXVu@Go8IDOetTvk');
define('NONCE_SALT',       'hcv#rTW&(7b1etgxg5Gt(42dV9PVJPuqa93#bUqLu155Vf8^E#muB1FwLNAoZ&vI');
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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
