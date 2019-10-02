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
define( 'DB_NAME', 'unaux_24468029_436' );

/** MySQL database username */
define( 'DB_USER', '24468029_7' );

/** MySQL database password */
define( 'DB_PASSWORD', 'lr1)@86p1S' );

/** MySQL hostname */
define( 'DB_HOST', 'sql305.byetcluster.com' );

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
define( 'AUTH_KEY',         'e9dhpuaskkgrsbiredvc0uuwphri8wzqxax9poz8yx9mtm5hvyadgyhpdhdvwa3l' );
define( 'SECURE_AUTH_KEY',  'nt9vu4ghyvxeum4q0o4vxodzykc5ypoy0js4osxwwv3q2ees8ctv7y53aozpd1qu' );
define( 'LOGGED_IN_KEY',    'ej7koksphuybrioktwieadwsf1f26v4umg9obhraxdw0cnpq0j69idlohunx4kkh' );
define( 'NONCE_KEY',        'hlo2t8p6mlryorzwprksvwpybczd7yppp3zabyzi7i4oxax5uvs3d1srpzkigicp' );
define( 'AUTH_SALT',        'wlu3fdrlxzgjx8br7ktzduaxiiioxpqaoxfwydogdesgg4gvwu0sm968xcvki6qz' );
define( 'SECURE_AUTH_SALT', 'ewykyd0ctv9byfqd8ltvrqkcsdh6bmzspy5noejxarvunte7eivo85ptzxb3meca' );
define( 'LOGGED_IN_SALT',   'lx0djh1unf3uecgysrjqmg6wip63mpn9nd9wzfcxktmixz92bckeeljgwgzzz5pk' );
define( 'NONCE_SALT',       '4gqievxddfh7pdzye4mhw6umxidpxztlajddopr8blfc1ol3w5h1oakzhl3hdo4u' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7b_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
