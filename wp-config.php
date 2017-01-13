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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Z]D;k~$Q*5@&J*C]w}Duh~_Sy;?J0Y}^4N%A.Nx+[)N-h7S/1_=gg20,HytB.hR&');
define('SECURE_AUTH_KEY',  '|fG%18@P!D3u^d`7;vcE%Hb%I+6e>)@E3^]UB]Jx!^BE -t{QLN(O@2cZBut=UK>');
define('LOGGED_IN_KEY',    ' pkR+Y`7nMG4%ecMkq%R]Ft^p+vJ<nbi&`f{aT}J,l:G)SU(E%rh9J)^3s|Dd|q}');
define('NONCE_KEY',        'gN+i]iyEz_pL$::*OI|*R^ckN6F[5v)4+(m67SxlA6r?HtMHqR,b%or+ +*J*|e>');
define('AUTH_SALT',        'Z<|MW<.mX>UoL?/o(<0bW0L}.n--#q.4=wlT9gdq.Nh<|3?V+/dG|K#b(1K?cF:F');
define('SECURE_AUTH_SALT', '+hAHUPsAn~(@z#u(7aHyjrM#Wfx(fuHaoc^n(dFUUkQb|/_N0%tNp-L~f|3ScNj+');
define('LOGGED_IN_SALT',   'RLTN;:9mo({++aF(Y}-Hr8y#j4e{A?>1 JBebxy,b=jsR4a]}|V&~~C-S-qjsA||');
define('NONCE_SALT',       '<^o2GuhkxAwiy< Gbpnq49:kCL>!h55P=5|V(6Amv3I8}m*`POg.tX2F__CUl@Lf');

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
