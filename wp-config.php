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
define( 'DB_NAME', 'rd_db3' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '33KmSLRWW2yYKLcA@%' );

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
define( 'AUTH_KEY',         'vQh t`;Y?c`GD58k/hcCD<h_ADD_d-<ULsFalX`,-[1~@xe,-n5D4z.%Rjvb1E+w' );
define( 'SECURE_AUTH_KEY',  '%(1PQxo3|LfSWjYhtj]^ZiPIH)H 3P2NlB-2q,dT7@6k V*g7y>Y9^@1p$DH}$A8' );
define( 'LOGGED_IN_KEY',    'Sp]&6m{`uprO2JMbX{+RJ4K]%38f1DS_v03hayi]edCmWM1i_Mw,]0p}Ru*F6 >^' );
define( 'NONCE_KEY',        'R@c%LiAvebZR={&C{$,eG8gYzJ=SXZ&K2a5|c[K[/>6q cz`A#S$:dG3<1BCVFy)' );
define( 'AUTH_SALT',        '-TT-1ZE,~fq*VQ|ZTLGAmI0IV[_aouj4/AxHM3hr-cH!I9WicX,U.#F<8s6$)~7N' );
define( 'SECURE_AUTH_SALT', '<VH[Gq+S|O0spZqf^lWt@x#gR^tb`@~K`V_%nPel}}!9`,r5#QTGlS&SP,H3ouob' );
define( 'LOGGED_IN_SALT',   '#!6KBg)nTqf{gk0z`,B!y;sXwISt~qDyxF8{8%a_wi3+kc$?@XV;h8u]Bl{;u2X=' );
define( 'NONCE_SALT',       'm={beJo?vW<6@/`4TU71<u}5kM[>W}Q^{s$#T7!5[IEuQP?[#V_x$_B3ehzhU%^J' );

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
