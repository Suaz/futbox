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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'futbox' );

/** MySQL database username */
define( 'DB_USER', 'sadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'p.sadmin.123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'n4cdR6Dq4Jua1k0Z2y1qtyuWnLTMwSv9U9CjnFRPOBQIE1eKlyk0R7y7LD8VOUBE');
define('SECURE_AUTH_KEY',  'lhxggKpyjucLAVfz1NTVcg0rqH42olxKTEkPvCm4nu1c4YZ7Uuj0pKXfJY1Jw0In');
define('LOGGED_IN_KEY',    'OOADpXk7UgkqFkVfUsRpjIliROfaHzLrcpYGgjgyssuYHcJKsrGZW0Kdt0lMVyBB');
define('NONCE_KEY',        '7mN0X1hBgmib72aIGLImQRxzJc4yCOHhtPZqDRYoBl8tUAdVmKs95HNAr6BTIH5A');
define('AUTH_SALT',        'TJa2zHUM85VFDJuJ5QzOKDY5b7WY28z5qTc7235lP3yozzoMKxZfnwj1OlTIvd2p');
define('SECURE_AUTH_SALT', 'VUfCwVGZ6JLZnY0CHSahLN2OT5OWs1EKLsJEHaf2aiYACywA08O7BXordluvYjSQ');
define('LOGGED_IN_SALT',   '9A9Xdajt06bkkUqXhQSl7mG0N47Vmvl7AhocGBRQugKpb4gWMrqtCM0lxkm0HjoL');
define('NONCE_SALT',       'fKIUfMGJHoeJl0Ju0EslqpJ2ZZ1iLaScKRwhonxHHTL1PxwjZQMs6v6znRCid2gs');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed externally by Installatron.
 * If you remove this define() to re-enable WordPress's automatic background updating
 * then it's advised to disable auto-updating in Installatron.
 */
define('WP_AUTO_UPDATE_CORE', false);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
