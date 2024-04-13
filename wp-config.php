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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'zBsh*QG:;R{%F%Hw0<JT,$GkrW]dil_}DFae^PU@rp/jy19=%.(kUVXqFNMH^mD{' );
define( 'SECURE_AUTH_KEY',  'Ff]F.ixy7s8#2lA6^(d:}?C*u)S_zO6KfCTbL(G&s)`)f>K&3[lq~=V4D+oSVzI/' );
define( 'LOGGED_IN_KEY',    'N*m`06{9xCMLM8WP]7(MIAf7-I)jN!0+3r$Z6t=(9}#/K<h)270PRT}k){W!Q]_X' );
define( 'NONCE_KEY',        'uXQ|{q~3+QSsbgR{9P9Yzj S5mx| c 89BJ(*E2KGk#G7^VA yT} >(.HD6fB~BQ' );
define( 'AUTH_SALT',        'nv7~*2/SCqnR%4+6qM,Li>3?Jz}02zRBv#%R{?9xgq#nvgD<o,NGRuo/4<r&,YN!' );
define( 'SECURE_AUTH_SALT', '9RI>C,}s^IW]xt4]^k+aIT]Y@D/My}q?i}>d@vi`xwBqZw~p)=W~=W_Voi  |>%-' );
define( 'LOGGED_IN_SALT',   ':H=^? $z{:O~,`4_Q}U8g*6W554)(9L,229v_sZ=_sh*Ut={pS[r1}XiwTGCaLth' );
define( 'NONCE_SALT',       'K0tY5d4l&_gonC!V`6!,8)l.}>UwiWLiv=Yo:Bs,w?fsVYeN7[IdU}0i^+CWc52+' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
