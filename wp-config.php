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
define( 'DB_NAME', 'asia_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '`0,BiWjpe$kv39AGCM|4dV6E<!(!ZO 1Hylj/<V^DupoG<G~p]:*oYzyAx&ETk?`' );
define( 'SECURE_AUTH_KEY',  'P&qAqA9`BXr-Fei]M9Gzf.-QoYC7(HoGq1I}JRgum4YUS%apSq:h,,93pX6tPY({' );
define( 'LOGGED_IN_KEY',    ',pP8}Y.yUaL1Mebr7} +wLpNK 8xz5qvUWnDW9U]$8y6Z$_*nm-~{2bFYXqamLAg' );
define( 'NONCE_KEY',        '1WQ4|q- g:CJ{^aE8m?Auw?d#rghu//p;;4ORRchH=}Yv4OKIS>la$GcQV%Rrg9V' );
define( 'AUTH_SALT',        '=.W!atCb+-gl:(_ oSi hKir-j%:og{!BaKpKY#(sXx=e3$;^JX{ts_9h,`h]`&x' );
define( 'SECURE_AUTH_SALT', 'R9cke 7a%7p:52kh>#d2(W1,M8}Q%J>vo=I@%l]|y4[2rcqU,H Zbk&Q#Z&n@h5s' );
define( 'LOGGED_IN_SALT',   'N|u=1t>~zDEtx&.-G@W>~{MRtmw2O8<6{j PM1U.RE,8oK{ijx|^ye&$vz9wPP`C' );
define( 'NONCE_SALT',       'j#^F-YU6mI$VN3T#.l{wx#dZ#G#!l$hL>)YNCm.x@%$-])0r)=B~{&nQom0^Y>0I' );

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
