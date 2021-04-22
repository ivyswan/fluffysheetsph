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
define( 'DB_NAME', 'ivyswavu_fluffy' );

/** MySQL database username */
define( 'DB_USER', 'ivyswavu_fluffy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SIJ91@9)lp' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'grnlycmdm3kyglinlwfz3cnxpqoxrevmveca1zg1nnzbue83ilwdlsx70zg8e61c' );
define( 'SECURE_AUTH_KEY',  'xik4utxtdhktnw8pc8or1tf9zwduut9iwshxgazjtvlnic1dhjki8irhpmq478md' );
define( 'LOGGED_IN_KEY',    'su6uwugunlaaqd0qmhgcz1ra5al1wh6n7wzzva0m2usufcumozjodbgfrzomevjx' );
define( 'NONCE_KEY',        'dbxhl4q0d7n6q2gld3efoxjawcwqtbol64bxlydz9utsalnmnzf3imi5iaq8jt3q' );
define( 'AUTH_SALT',        'b3jefrywfkiyj92qkh1ylx1dnfhinrfvi0dksrkfajncmziw2hl7zekp8ynjx2mj' );
define( 'SECURE_AUTH_SALT', 'kpmfo9lektmlpfhqpicgdi97x49obooxc3cdq9viakftqgnildyrvxpvnnu3xfwt' );
define( 'LOGGED_IN_SALT',   '2f2dwe0g61fyqycvwr904h1bmswdjnc78ypi8hgkozky3mfbeuaxbdrhmf0fmkja' );
define( 'NONCE_SALT',       'lyya7dmlw2omezchexmssoncai9ncqonoximv9gygk7gz0tam4fr6yrkamhpf1d8' );

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
