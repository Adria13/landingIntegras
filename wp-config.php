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
define('DB_NAME', 'u876304296_integ');

/** MySQL database username */
define('DB_USER', 'u876304296_root');

/** MySQL database password */
define('DB_PASSWORD', 'Integras.tu');

/** MySQL hostname */
define('DB_HOST', '93.188.160.109');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '^5t35ccvS,bHb# d/vJVpv-2u6of/?Q2BRc|yt9J!ME0%5v,iPLNCW(wl@uAU?41');
define('SECURE_AUTH_KEY',  '-xW4,gp4#hge8sM(anLfBP%V(B|rH4}s}x0tMFAyy-[K3lQcl Hp9bJa&+fQJFJL');
define('LOGGED_IN_KEY',    '@9+ik);<DSx).{|^=~AZXkpkgB=vvDdk]Ljqi)e[*p%h-sw+cb2.rif~;(OAOx{$');
define('NONCE_KEY',        '.PzkB-pr]c*Q&WwnD9^ S,LS6|I`!h4di4z[p6hW{<f15%{q!inmqF1j@TX]+.1;');
define('AUTH_SALT',        '5E>>([v_K5Ra3C:?0USOhwoCmKX,/yC7GU_nnK/28j,[)U+o]r(obyTjS:-~11G8');
define('SECURE_AUTH_SALT', 'v`yM5y|.J]3Aj-w7V| O$4>3jv`z!gs2Tip|1s|>k9dSymb~0k*(vY==hjCt~O&y');
define('LOGGED_IN_SALT',   'qO}r0!+xN572s?/ge#;]_1(!/@OB7W%W73*+2!AIy4Dg}Y$*$HS#8(^z/nne6FYF');
define('NONCE_SALT',       '<doP>`5GwSclj[0Z!;8tC2rA|$<SN>|w#i&Jjx][ERG~k2_BC^A8]WtCg8`J7vJW');

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
