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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '6bdigital' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',i:]ALrEx6H7-B0 QS(mE:!=d[!m^]TzH1.-2Liwf`Is>_;7*)cxDZaL,;+AL#oU' );
define( 'SECURE_AUTH_KEY',  '[$mf!//sCGTfhQ} x&3aN56)j%!a4qqE`B!GG>i~;)+1B/DW,xf/)3<C:)`t1jpV' );
define( 'LOGGED_IN_KEY',    'tWW +>*/5:wz7BG@KChpRXSiZmG$ARwt%bsW lWh=9/feXWt# A^S}LF)]N;*@{/' );
define( 'NONCE_KEY',        '-(4,?onEnWM X1@_#:A$+,np{rp*5VHTTgQdKOB= kC_K<.:?G!NtRFCt5hzDtdu' );
define( 'AUTH_SALT',        'ZjBT,&Xj;Dy4q0%(V~,N]n6~c/vWt-_a`s|7or2t4@O>t N|B&Vc::?YO%s9ta~z' );
define( 'SECURE_AUTH_SALT', 'kt-BE&OzN42z+![:yIUAJ5)bSI=g(nO0IAmQ@YredAV?jA2Mr7,*T+bdv[wr@]./' );
define( 'LOGGED_IN_SALT',   'yEgAz@`Q%LvsRuIr3!5-WC:v#GqklM[tyjbsOSf[.4cx8L9u3,D^_bWCm0}{|gj9' );
define( 'NONCE_SALT',       'UThy(ZI?1._x*y_|uJ>Kpv~m%w@>>/yeK~m_M~%W}`+.xmShiI_5+pUKa_dank3|' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
