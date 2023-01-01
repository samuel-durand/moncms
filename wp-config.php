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
define('DB_NAME', 'samuel-durand_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress_dc');

/** MySQL database password */
define('DB_PASSWORD', 'Inazuma12456');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         'vZPu7El6d3rVZS)Ns9XUSqBb!rVS!ZIPCX&Lio!fEjog4LzTLAQOS2kuqy%Ws2Pl');
define('SECURE_AUTH_KEY',  'O^Zs1Y)sjfKlp)m^7ftSSWx1wcHSQm2VplgkjC@pm0uAXBIr^4^woDWOPS(VSc&9');
define('LOGGED_IN_KEY',    'Hou6^a8KzK^7A2qVZo(GV@lorN0CaAzyWXwTKo8QpXjn)XL3Dezw&EmM0X@#lPU8');
define('NONCE_KEY',        'YR(KVQAlbfwG(M&x*)CyK7f5H3JzYMF46!VPb&HyWo!2@J@yxEICsOmyAM0x6X7#');
define('AUTH_SALT',        'EEK)HO0%mANDE8wa@P6!QGPYn5VY(Q11ivRb2Fk3nb2ZMqIu6ymwdRrSN8cD35YI');
define('SECURE_AUTH_SALT', '8ok6lWSIHtrN9@w!LfNfL8mbqLTO23Ch3I9wapE7df*@t19KcXLgaf3jR%SlseRo');
define('LOGGED_IN_SALT',   '*RQc7v3pqpQ!tkx9hUhbzN^iYSjXQuV3ui66inp8mBdM2ICA8gjiPJXAUo)Q!2bD');
define('NONCE_SALT',       'H))tFe9baAZITU%TsSoObD1woHdIvkwu1UuNKu#GpR#5A@0m2E2eezhRxGSEy3P)');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'C68RzEKwc5_';

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

define( 'DISALLOW_FILE_EDIT', true );
define( 'CONCATENATE_SCRIPTS', false );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
