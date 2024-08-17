<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rednblue_wp' );

/** Database username */
define( 'DB_USER', 'rednblue_wp' );

/** Database password */
define( 'DB_PASSWORD', 'rednblue_wp' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7M-K-Gkv:!?x<<9m{/bF1hdK1(T.LC{9eo;SZ(b$jv?< =Uhso%@#>75myN-C[=^' );
define( 'SECURE_AUTH_KEY',  '4Mp5t7?2,heqKr8di`Qaaf%Y_tI*Mn;$nC7PV?<A.1|yymKra]n#A4QxKW:~H^(*' );
define( 'LOGGED_IN_KEY',    'AoHM<U[GB@4`!9p~/R9@=&3u*@nY@0H*V3cMJ]~GBP8gIDQH@Oq~b[}`;1(xW6RK' );
define( 'NONCE_KEY',        'hgA ;sHN^lnpCoJQ&Z)Yl]L.JbpY-*6fYaX~zg6TRhbc0)4V2VuxqM7+.bj<FdDW' );
define( 'AUTH_SALT',        '$pa2a%4:/7T|@GkC1{E;=YZyUv#+U^BlT]C =;[j.aYZ+5B>V8GsVj`#mmLZK[Eq' );
define( 'SECURE_AUTH_SALT', '5-1IIS2S|n2&pc~z]azf_H*N518]81exEzb@itam21)isY=865^Fv!6Y|V.a^#IF' );
define( 'LOGGED_IN_SALT',   'Zi]>|hT5jSM~LjRYwe`&RH+{i9iwLPlg)()pTrojMSWa6k47q0zj-U)lPunJVT/g' );
define( 'NONCE_SALT',       'X^8k%-b3,!2bLH:G$%#a{Q=dSV%[oLiKK%;fVfB87,g[kCHhQ[L@Yri(P!SA= 8[' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
