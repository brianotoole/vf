<?php 
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'vf');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/* remove contact form 7 plugin scripts unless needed */
define('WPCF7_LOAD_JS', false);
define('WPCF7_LOAD_CSS', false);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ZwJm!$/bj+B8MwH]H,)&K$oW!s+v+s+>a[C?LKMWW2q%+l5RN?,cBhk{1&ZtmOob');
define('SECURE_AUTH_KEY',  'x@NR.,|[E1x-HMGe/f#pic8hXvo1Yi(IZ8]-:Kr]C-Ql!/x02U1~oCQ/Y~{nPlsG');
define('LOGGED_IN_KEY',    '|/[+p0w3X[-%gt04u-Qq5x)3B[P;4~=RPv+0KmbwV^-vh+^+QEijt~e|Bzz= 3d?');
define('NONCE_KEY',        '~;5W3hntbc7w_pH;B<-5^O@,2$1|JLxr-o[|3K~}`|J0tB1#d6NA@Ei38LzeeG ~');
define('AUTH_SALT',        'TyW+]l.J-u3PT<bv6Iy$ 9FEcog}@ge|$zK[0prR(KM.zS+/ueab78+u2s@}x]%5');
define('SECURE_AUTH_SALT', 'm*_:en)bg7O*-oBia^{E-/=gNIu0{@J;ovBsK0`30?8W}j6PMJzaa?E%2=}dwwiF');
define('LOGGED_IN_SALT',   '|i9~l?VVE%+epIJw*9-4^|&Y/C>y R+m^+ROGq24oc%FdF)<35Qm~Kp>@U1P^RDN');
define('NONCE_SALT',       'jfP?C}&P-^6#0e`3bXka.HJutL!wg|t_#Y.S9O^c1*@R( SW)riPG&??(sOj i$|');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
