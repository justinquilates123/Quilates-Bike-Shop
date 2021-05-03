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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'justin123' );

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
define( 'AUTH_KEY',         'jMp;cuKJ4](:>m|z/.YpCSgIw0YTeYN04aQdF.j/VX_o. &vOBWTzlVFN0vduvGv' );
define( 'SECURE_AUTH_KEY',  'R#ci&D*s9{B=9,f:>*+9=RV[#a5qD975(52^=;61Mh[!O;$06~BiFq#FCriT6q?$' );
define( 'LOGGED_IN_KEY',    'n>IgFbyP/KM%x#SRB0U!$B|b^)iaQdwq(V2vZ  ):SW=0]P.bZ50DHd*4_r~Ff{#' );
define( 'NONCE_KEY',        'e8L$ +&-G^<ZQ!BZfR6?w5=q/Z2TEkF/P2Ohh<PC~)%~{//AK<sqHPrL|+qR r6S' );
define( 'AUTH_SALT',        'Zr}SGv-2_[ bL(=_W8~oZM!3c4HZ|F>C3WFU#%H|<3c&R|Nu-Y!4zTlCHbb7;b(2' );
define( 'SECURE_AUTH_SALT', 'f1Rdx0/YT|+Kbc1b?hW.pDAd]Fc^4Nr+m(pi;B4~sx&XeKC*?$IL,kh/(ZBg^>uA' );
define( 'LOGGED_IN_SALT',   'N~iJ}<>Qe)nrat/ex&|M$!iFogm9R%6uoawxSZE[X~cQ+i9>s:_dU}ddAhQy_XSY' );
define( 'NONCE_SALT',       'PvM8{(&8-D,/$)2-NDlx TdGu9Cxp=?k^nJz%F:)Dh4zeJHSoQfjT:$+su!3[t%v' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
