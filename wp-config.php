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
define('DB_NAME', 'wpraff');

/** MySQL database username */
define('DB_USER', 'wpraff');

/** MySQL database password */
define('DB_PASSWORD', '1eU@P-S9z7');

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
define('AUTH_KEY',         'julgzlnveg8dh9oa4ovexwpxfg9zfc1bjynnuxwskvhjn9u2lqjqyw5zvsjmt6kw');
define('SECURE_AUTH_KEY',  'vnn7cdvpnmd0rw3mnaeeafqgrazqdglislsxibvproestydnbuj8tocodolmxnzg');
define('LOGGED_IN_KEY',    '29obfcru1bgery2n4fmijhrmagpg6p9rbtmw2wy7vyh0fttrhm6ao0a2oatvpm1u');
define('NONCE_KEY',        'ygqpuf6ysgpacfa3k6tveeyvxy5xkmta2aptwv5vijvpgfwcy3mzj6irnrirlt4z');
define('AUTH_SALT',        'ohshjrqexa9crlu4h6y1l83ecaavadxuq8gzbl5axhzffhx6ar1rexlujjpsaknp');
define('SECURE_AUTH_SALT', 'mpsu1ppxsrsbq9k5xxllv3j8mqph8kdo02uzpy4unggsvzkmxpgdkyrk6kblcwjv');
define('LOGGED_IN_SALT',   '1rtohegdlbm26okxquyf0hjnnruekpqrlohuzfqszgt99itc3tbnka1lb8a6tvxi');
define('NONCE_SALT',       '7srolr2afhafxnbc4gaqahpqlzjl2nxxrjxkmvn9mdkdrojbsyqdminf0orl6fwq');

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
