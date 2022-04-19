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
define( 'DB_NAME', 'primero' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'AzjPUf}$Ssx3x(#9O!xqzLjUi+AZbrOu+&4p!4Q=o-tVAAI7noi*i TpvJrLS2.,' );
define( 'SECURE_AUTH_KEY',  'WzK@H:q PrmSHjl#EOKtvaP~[Nc3|#On+NKepmo1QhD6-KMXa~F6a#srPfktAh-I' );
define( 'LOGGED_IN_KEY',    '@DmpwfGhW~taT>2PP]O*#g+7F4,)9S~DX}${/!p<*(*GX1^OT?SxUK8~C ~@7S J' );
define( 'NONCE_KEY',        '>~aruyWx-SBd&C2?uKQ#`?%9HE_QkZgi/;{pG83svPEbn8{aHgf^Z#:YAVV=@0;^' );
define( 'AUTH_SALT',        'j8-[y0Ej<SWza>(#m/ q|!Y]f, 3.eH1+0rhZKtlfcx@T{D@2*1ml}s|nRN{ D$~' );
define( 'SECURE_AUTH_SALT', '7vWWhk45,~%YkaOkK_`!==Udj)P&c`/V]0${IYxIv1VdXS@9Y|20?$Tc1WkjY/Km' );
define( 'LOGGED_IN_SALT',   'J`$^V]70@0RH0[IGMdVW]m|E^l(V5j538R..g`n_}{Z%C3giv(Se+]|7>Dm.1ZIh' );
define( 'NONCE_SALT',       'bubRWA@NA`5BWsk~aIdF):e4w,IoG9P[-Fh}-SwXdc)=fn0*/u7q+iRYi,pOi(dC' );

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
