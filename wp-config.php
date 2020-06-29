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


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/app/public/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '6iySc3n+YPkpCiWB58JH9e3DMvMW3K6QqXYOCWNJx4KC3v3qSCbtfzYm0nEpgpcKrWi5CjzXw9m3jlRHNSPV8Q==');
define('SECURE_AUTH_KEY', 'GV/XInPS1hugY3fMI9HlOTHXVNyVzWa3kt2+R42LQRlV4CN1lW2dJ1MYj60N1ZupSJDTAtz+NCD394ZC9nGOFQ==');
define('LOGGED_IN_KEY', '2/rulvDSi2Pug1jXdWjPAGEnO81lq7A1jndAEVWFKiuXZxuuAYyGG69hA9ctw60HT533lzWs6iDBy6sddg79LQ==');
define('NONCE_KEY', 'HCTk84sG7svq5hfiWFs67eeJBdCwaW7Qocy0JYzOuhr+y7HscMb3dCkaT7H6d5Ri21QV9zvXdUaP6u1QKGMv/g==');
define('AUTH_SALT', 'OvFXHv8RUcimlcPd5yKWdmkYhwAuxF4keeHjcoivYkIPkOEhZiKXdi3lrJ/PZsPXF12l67oTwia3HMFT9Y5y8A==');
define('SECURE_AUTH_SALT', '/zwZ31QcaIhpLnQOiyrYdJzmv7PILY6t8gGdjK9v4oQNAMmR8QSuNPl8ZJmSL6Ggu+Qgq1rHZr7kOClVmTKAYA==');
define('LOGGED_IN_SALT', 'rtqHoI1Bn+uQsp+X6+zqZSDVKJPcfBDt6EhdQpVE+SzT31n9bp0ARbmomIITEoxgV9GqlGn2MWI2uqg/fr6SFw==');
define('NONCE_SALT', 'EGbec702aWq2fn7Pa9Crj6RVf8R1/j4BokDannAYHVaxBubbIUObvyafaawkiUcMrL2vr+RsLghTf/q/D+YE3A==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

define('ALLOW_UNFILTERED_UPLOADS', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';