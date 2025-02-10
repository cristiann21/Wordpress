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
define( 'AUTH_KEY',          'Qc}O3fC[Z7;LQ_B/^0UEl [4S4^f^JF+Nf&wj9nXQ<WX]J~,EhNT&]CoTxyTyQlW' );
define( 'SECURE_AUTH_KEY',   '@*C,GY9oKHM.58)Sq(ZnHfuAa6kndVCl^bWNrLI~h@ifq#~51FDs~S)|OuT=vt@k' );
define( 'LOGGED_IN_KEY',     'JBxoRK7?}xg`cxYJ<z6[@ZqdZ9,x$N{K>f27G83i#]3VVq*xdiQ#3;E,Wr-.:c|2' );
define( 'NONCE_KEY',         ',M>FX0O3k>d`BfNt?R$b}#4DW%.>q8<9=^+wQL_}t7;n/bc^Rx1=DS{>J|rW$[~D' );
define( 'AUTH_SALT',         '>2ZoJboGyf<-j3S04>.@%(&CP,X%mmRxBsAw}6^kAj:TK`f6}nM1UQ@B%-E8;]kg' );
define( 'SECURE_AUTH_SALT',  '&Zm+/FaK]a6-TQ_{7mIZ$*j3hU:NrYm7`lJvjJ<sS=}c(dk].(vZm{:0zP?zx1pK' );
define( 'LOGGED_IN_SALT',    '}xSav,SRV%S~~t!k0^~^p:@zt*A.4`p!*{YMhMbr|qg~Ot:__~L~{(E<aL[</S%V' );
define( 'NONCE_SALT',        'lMy>r]je:(4]#vWYI]b,hI9+($xOGUWze>p-!O6Nz/K(u-uiRJe!-_u>w|%k{`2W' );
define( 'WP_CACHE_KEY_SALT', 'YU<0n`;$#g{P~<T2Q*A-TZ_$~v5oP(Ac8<d=)E.!D_{]o-s#I%0.o[gV$[9iped-' );


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
	define( 'WP_DEBUG', true );
	define( 'WP_DEBUG_LOG', true ); // Añade esta línea
    define( 'WP_DEBUG_DISPLAY', false ); // Para evitar que los mensajes salgan en el front

}


define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
