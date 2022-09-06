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
define('DB_NAME', 'wordpress-31363701f4');

/** MySQL database username */
define('DB_USER', 'wordpress-31363701f4');

/** MySQL database password */
define('DB_PASSWORD', '27896b3a0b01');

/** MySQL hostname */
define('DB_HOST', 'sdb-a.hosting.stackcp.net');

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
define('AUTH_KEY',         'EQYy7rLXLMxz2pTWxr68acgAW9G9UJHI');
define('SECURE_AUTH_KEY',  '5OWp4+Ous3IT4m4EL+n6hy07oJ3I4q6i');
define('LOGGED_IN_KEY',    'fR5w7rNCpnYw2MbelL+6x/3wJ3RSx84d');
define('NONCE_KEY',        'hKILz3p1eQMfDds5H3tRE3ARr47AmKVx');
define('AUTH_SALT',        'QDymv1QnqQm/OxgJqPvCKuSR5ZmeOATn');
define('SECURE_AUTH_SALT', 'H3RYJuapCvbthXVKapulkoYEkYETW8S5');
define('LOGGED_IN_SALT',   'Clzs/d/3/U29HwvZ8oww6yljaKeqecSG');
define('NONCE_SALT',       'cXkGzoHVY3TQX3qMjnlbh89qLNrFHdA0');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '16_';

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
