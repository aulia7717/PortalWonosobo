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
define('DB_NAME', 'wonosobo');

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
define('AUTH_KEY',         '8)9KPkqm-qY82@T8|a9|u0Xgs$1Eo|l<N?fyKj+OZEP%amHB M#y(k5!J ,hnEw`');
define('SECURE_AUTH_KEY',  '<^q-My=#(0W]w6Xn#BQ/iY}v-HGMa$H;QG:$XyWrar1=P,4y>D,[sgw@rz75I_=N');
define('LOGGED_IN_KEY',    '%7 Ky7{? mpBPxHGB>>&8L&Tb#nG0Xf1tstD.@2?ZfBt5^;K|Z@VG61*tzt5b;<p');
define('NONCE_KEY',        ',@nTqjt[k{Y!pVc/c1rqP)m)6_{z;.Dt1/pL-|h^&isYu2U<@DU*G. .GJm>fJ|l');
define('AUTH_SALT',        'LX}.EB,6?+R#%ZYg;%KDbIo`DbgYu3Rq&b{,szARK&}Yy3o0OXwwLuq0<Ji/c W>');
define('SECURE_AUTH_SALT', '<x78}IMyI[1Z3!$U8A0>i8#@(HvJ$<-DY|0glicFa8$%_59*(kw)xquOWSuk)x;j');
define('LOGGED_IN_SALT',   '^g^9;~_..oy6^tz_T|w%&p(tgug&J6}ZCK73woxFg&V}XrmQ)k#SQwhih7j jjNu');
define('NONCE_SALT',       'i23{^=uT4FqEu<R*>6$!UqDX9L?%<zUf6`k<Lk[9.YHA,Z2VVc|SLS_(f[D=r#s@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_34';

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
