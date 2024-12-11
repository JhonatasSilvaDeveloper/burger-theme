<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'a_!WJJmZOiH=Y`^,hHFZrY*8+[-)hNx#igp|$x/aUlyEUj7Z;tNj)4S3*o~L1;61' );
define( 'SECURE_AUTH_KEY',   'wst8k5nL)@/I<iGdNcV|zAXnCW?y?c4jY/*5cBMa8,&/plNcFMeBA5cVD?71U#b6' );
define( 'LOGGED_IN_KEY',     'w1Xbn9z*5 $DT)#ed~3Z*s]@rTk^k?cDNa2kBXxcy<.x*KQItTha)#|bC5X/f=37' );
define( 'NONCE_KEY',         ':IWq:tHt+[-E]5Go8CYn3}e$S %^5P9kn3,E.`t)*(tGul6*!3>u=-Dq`}o!sC_3' );
define( 'AUTH_SALT',         ':*35W9Gz_#EtA qr-n`nXbg TMtTpN,iH]#la)~9,]Z;.D^elV<RM,iN&|}=Sb44' );
define( 'SECURE_AUTH_SALT',  '}2!#6UXr&6^$JBj.y^{pV`Ri7#V8@;fx[a7dB8cPKy$`YV7Udv{l%)[J$!BDYNIH' );
define( 'LOGGED_IN_SALT',    'O^pS[6g75U-K>rQr_&;c)hljSbG4WRtP!u0%v|<Lt0_z$ew7geYPNGrS_7J4zJRU' );
define( 'NONCE_SALT',        '^Z;w`]i|leRBqSTV>xg85Q}^C[{]*^od!}`H@1rr_zXklk`-2i-ZhtYdpNF34S;y' );
define( 'WP_CACHE_KEY_SALT', '3j8?Dzo=966F>A7pkH`w%wH>NiXfOb%%9BN~Y9A>k[F:T{Ug$puOIJ@k>BI&M>d~' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
