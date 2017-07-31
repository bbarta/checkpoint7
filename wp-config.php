<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'brianne_barta_wp');

/** MySQL database username */
define('DB_USER', 'bbarta');

/** MySQL database password */
define('DB_PASSWORD', '0+sFZdMA(c21');

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
define('AUTH_KEY',         ',FSrZ.vSO0H0jtv*<eiJa`^E3pqLQ*n03;F(pIApKK>jhzN #a6T9r}x^<=jIihP');
define('SECURE_AUTH_KEY',  'xC2,|s:w0HBEzPs{sLiG`()5Eil{hiR%Cw0S,W;[+Q!AU b):FB/gT3yKcS=J(cY');
define('LOGGED_IN_KEY',    'z3O3q/ACvEl(F>qXF}~qP!c#68=>fPyL<,TYxZCl[(fNbcA9rz$M([RZv=@d|51P');
define('NONCE_KEY',        'G@=eLu$ &rVyt#@ Jb*~mzGo+ZgAuy>B`tL6RWUMaF2yC%xjeZ[=F7~V!5{9^-V^');
define('AUTH_SALT',        'YCossac?R^oGZ5w^s%$4OU1S*j>):]w8$z`Yh8c,DhUF*%Ir8!7^)at%_SHgrCag');
define('SECURE_AUTH_SALT', '>)-U@2w~p7&VOF%TE?U7];:SRyUo>7Sw/$VJ?^!F*$P]n|EE2smo3[7/2_GdkClk');
define('LOGGED_IN_SALT',   'w`q_~xl.Xa[cLHGdNXe{q_Q&Yt}aU_~eiGA$m:!p95)04~J-qFga1JODiiB*blP8');
define('NONCE_SALT',       '_9t`!<CIJku@ggv&2=L4v?nQ)wiU8%KHy>Y+rLee<Ndm^yh)oN)]k6E|={&_lToH');

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
