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
define('DB_NAME', 'creating_wp');

/** MySQL database username */
define('DB_USER', 'creating_wpuser');

/** MySQL database password */
define('DB_PASSWORD', 'fC{^CIzau(o+');

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
define('AUTH_KEY',         'sgGr99W(AFMzb=TQ2E{1_J&tFYj_].;<vL3`By#58}U2 h$aquyX5/tB:7),h95h');
define('SECURE_AUTH_KEY',  '*gaG8&Uip9f3/&9xkXSFe6k1Y$7=^D}= u%nJ([pDA,))gA[,(JtfKCcb,6wW)uo');
define('LOGGED_IN_KEY',    'y.05dag7Z_iNpp0:;.<vnUhuTGN;5BLP},=|v:YQp0_O9sgT7jk=b4cDQywAYQbO');
define('NONCE_KEY',        'O=HxhQ1IRs4?dYOnbp@Agc,hx:sxVpyHpv(].Cs.~HTs_fq4^!?#aw@<+IzKK!}d');
define('AUTH_SALT',        'P80 #vdpM;9>tt,2>WUI,)+`gYxG};2BDVCKjsFGA->m^*Ks2hdaIjJ0%]xH73H1');
define('SECURE_AUTH_SALT', 'pgjeWF[7lo>Y44Eu>6Ea&@6-/rg#oF}oAl5v]8A^:jGu5j7S#2C4=usi/Y3p+%{w');
define('LOGGED_IN_SALT',   'M^$!}9RI?w>kh,Mrren-$=nlI=Orqaem(q.4xGg&[Dno#DAon+/#.$G7X$QD{boZ');
define('NONCE_SALT',       '&8xQ)C{Co^ne62;2l1pnE2]9S57cO`z%e,SRn@Y*1A<H@yqj~?E:wU}iGTi%2g=+');

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
