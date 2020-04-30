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
define( 'DB_NAME', 'benwelsb_wp466' );

/** MySQL database username */
define( 'DB_USER', 'benwelsb_ben' );

/** MySQL database password */
define( 'DB_PASSWORD', "Chelsea0712###'" );

/** MySQL hostname */
define( 'DB_HOST', '77.104.149.221' );

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
define( 'AUTH_KEY',         'f24lbwqxbgy9jkg7quculbivbmjwrwbifnz1hx5sdowuomjloslryojvv3fqdubo' );
define( 'SECURE_AUTH_KEY',  'aq77awteu9w0pglgriozlbtxf6mfu92e2kvidhdsdcjrysoprbmky4aduzjqjsgs' );
define( 'LOGGED_IN_KEY',    'hkdqix86pfx46lpurvpxspzffzdyqmm7ezprjhlbzo303sxpjzlzir0dg7myulan' );
define( 'NONCE_KEY',        '2w5oh3lyqgm17iwyyem9lbqndhj9terl2swa3ldwtntzqmxoapbjdpnxzljmxool' );
define( 'AUTH_SALT',        'wlta8qc6flezznivx5gkr3ccbpvlmtzudasjd2pahedtjjplkgr0nowjfgsjkmzk' );
define( 'SECURE_AUTH_SALT', 'lcct87mg7wzaakpygqrpf77rxhtoawzxhshnfbg5zwpaxynskqwfluw3sguhxgz1' );
define( 'LOGGED_IN_SALT',   'jmibddojemu4alvwexgadqllut1uo32g0ytkox1r2m4bj36jyeipcp1rn1qypva9' );
define( 'NONCE_SALT',       'jfiyn68zqe3saygzhzx0bsrubuulpwb3wsfe4ctgqb5nblxvekxe6vii82swihbg' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp10_';

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
define( 'WP_DEBUG', true );

/** Prevent code editing through WordPress */
define( 'DISALLOW_FILE_EDIT', true );

/** Set WordPress memory limit to fix HTTP error when uploading an image */
define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

