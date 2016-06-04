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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'F8979jbL3v');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '{}I`r6}*:Zg!c>KW{/sD.KOyqS#54J2NJEB:Qy9cT-|4V{HG!sl6!=4D,M=~WM^E');
define('SECURE_AUTH_KEY',  'OF|F0l$d%M?.LO5f16%k_=)ka!;lmI[F@ec#?#v[`@8UX1-d)!V-R#2.j?e(c%Ga');
define('LOGGED_IN_KEY',    '5XFrD:S=NR1Hm.?%Q*DEN8JlFJPn#OXkm*`pZAyvxLkk=rMjbP>wKPBU~HypF#<r');
define('NONCE_KEY',        '?,XiQ0/No&6E^$mHUOL#Bb(75x0}uAB*jdx3&;,+1n&[a| l0@BJr$~9UPY%Z-wS');
define('AUTH_SALT',        '-h7b)|%%Sd:tr>/!Upt4BXH>A+c{cRq0I++04Nx~te,D{:=~8p_FW]?jIL}E:4SA');
define('SECURE_AUTH_SALT', '(y ]=DQ%)^T1}SmN9CUCcP9q(6aoXw;=3mvUDL}9}9C55GA+)8$<&*Mr,WGf7ElC');
define('LOGGED_IN_SALT',   ')equ;V},#iQnu(P]%:ise?s7(7YrX&S#C5]m67+g/&cfzZ#2wtM>^[OR<}WP:PYc');
define('NONCE_SALT',       'dvg NVHXB){i,!S|`&34hbl~>E2+N> hRBh1N$.n6|;1_@?/Fvdfm[2>KU3<$8Gu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
