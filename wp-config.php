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
define( 'DB_NAME', 'tompo' );

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
define( 'AUTH_KEY',         ';:i69}@,L9_xAnp@u?Kk@NPW*gG;E2B&isfoB*ktpM*Iv E6m6^P~8}GqY~>Qk$#' );
define( 'SECURE_AUTH_KEY',  'gk4gV,72vaFsLb3_GNvCa[V%g9=naOF?H&il1r}m=vk|Mg89KZjd4R$=JC+&0WbD' );
define( 'LOGGED_IN_KEY',    'u`9?@I=)w1M)+B;#ufvn$R/WdgDGP{!`Q%y^Si*Nz|1X^1YrD)h#>wXLFJYxC#Mr' );
define( 'NONCE_KEY',        'A%xF/R1CQTiL3r9k]{F|1fO9J{-?9aYu#v.IF3+nM%[m,E=:/45(5)..>vbm,LSa' );
define( 'AUTH_SALT',        'WqP 6IdC<~GqtE<>fd6.mJ-i3Nqvj<6o+N;%156CBAbl~.RMl2~YcLN-a:B]VqU]' );
define( 'SECURE_AUTH_SALT', 'Oip6YA5_AQZhtcu(T51$z=}:7pnzQ6SO{GK3c:pPbDhA&XWvB*$VqqE]W7o7sWI;' );
define( 'LOGGED_IN_SALT',   'vffW]ghv&8~}YAz@SKrFi;;gGPbR@9;}9&zYUDV/mwi[?CM_FI_rwN%p +MERe]<' );
define( 'NONCE_SALT',       'CEFp|osD/t9}GBpVdgI~#qpYQ$+.Pp PMl!JQjnJ-mD4I[FhlsbYT6k0w}PNBC5j' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'espri';

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
