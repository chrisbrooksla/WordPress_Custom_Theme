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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'w6qPahsD0WTMOghyfS5OHykmrzq1EAY07pMX8zxKRiiXR2lKLWuazNflvjjUaWR6FjanooFSZEiWTqkFJrJftw==');
define('SECURE_AUTH_KEY',  'y97RTPKH/LR80/A7xq8hixi8GlRS7qVTl974m3UWpF5rzPRdNm1/fyaUVYhZo6Z4bRTtr3c7L5iDSFUhO9nM8w==');
define('LOGGED_IN_KEY',    'GIif6napBnFzUSb1tCuzW/Gdaq1l/BtRpX5zIhgJvY/FcDPLE0wxd52f1i2LauhHiC8d6Er7yaOMSmYjeeoqMw==');
define('NONCE_KEY',        '5meCrAjS/VVW6DPxGiwRw2YlhBPRDcGBiTi94JFV3Crm8BDeF+oVw24iMP9+Zrp2TLgHJ2W8EhgFRsJRTWyz8A==');
define('AUTH_SALT',        'Ahm5yidkngVNDByJU6mED3LUkvMkJyUetUojkHLtJRc2c3QcogUVyrjTeLuuYsi6WADivyAioi4tNdvPZQfjIA==');
define('SECURE_AUTH_SALT', 'Kon5JX/4FD12qbHECEUQ2+MhO6SjVBr0bcJqGHjrGjOHXJwx95wI8OJeSvaIRgHDEnJx21jK3vnXI3IMtbD1Nw==');
define('LOGGED_IN_SALT',   'IxvWY9w4V8JCx7Obs+tPs5gil3V2JMwwt8lgn49Pr2xAjsUVW159tA9A3bQbJVwA7p4Z0Z2GGM3EITkXmWUnQQ==');
define('NONCE_SALT',       'i7vxUVxVSfIpvPk3IaLkfYKXmSZNttudJCDQfpA3aBq7ycDqc/OTamkRzwqIzVti+k805cQlTjQB61geLQYWBw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
