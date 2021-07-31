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
define('AUTH_KEY',         'Jw4/4i8cuGppB7eAfy2dOYSNg6AyLOBBG2a5fmxOMzypYXbdfgSDPi0q0HvyjiXAJLaxcMfbzbemWm1FsUcdkQ==');
define('SECURE_AUTH_KEY',  'Wb9e3b2CDWjioqw3FF5f+M6nqJM+Dys0/h3fhyRe7PfNtuVyKgVfLO1cCk2LK9+wQ0TC2i3F2SG7qXqQGsTNXQ==');
define('LOGGED_IN_KEY',    'KNq4MDKAeCnAUjLawRtm/6sK+2wAYPwX4T5fMsNY+iaV6yrVKa0C+QfIHENWuxJpKifFE0fDlv7mG8mepwkZng==');
define('NONCE_KEY',        'yZKwcVZ9BKFeK/qOlHuYW7KdKmCagcHqEHYlKzTJSsc3nqdmP0P5NMCe/zBGgH+vkwd+AVcFOspu9n5vlW+yQg==');
define('AUTH_SALT',        'mauV2mqx+aK3AZexUh2/CcZRIryIMJfOHc9gEqFb+eqvGmYQdyysdLChbB5fXyXyyVpI2OKcUXMXfINUN5Mw1w==');
define('SECURE_AUTH_SALT', 'l9q2cF2KHXpr6XJJCpUkiRnK2AMoXrBGqBdnP91eb/SUImI7NC+hAuoxbedGGa4lEz4NjdiuRp/OS1TRQC2B0g==');
define('LOGGED_IN_SALT',   'YUKqxdojVu3Z+pKCtiEP1kH+aMUQT2wNn5m3QDulxHHzmkJLwc6Vg+Y/+ZRWjBdw9DEAZxh62x72qlog1frwAw==');
define('NONCE_SALT',       'JNxlmKegIRLrKzUxGWohyvWHurbmzNiSGhJ/B638GNefIYgf1Iblm5M6sLUt7S7RgbkrqcOF7VpVejhJZhqhsA==');

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
