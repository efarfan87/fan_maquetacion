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
define('DB_NAME', 'gafa_fan');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         '{JSX-|(1X(zshDd[WHo`0PRzse]eM;PN9?!Qfr|QM)KMgEuFeO&+Z]3q+=#WsPh0');
define('SECURE_AUTH_KEY',  '..|42N1=8ci/f*rx#YtKxr103f@#VT<m&>b,;g<EKY3;&k$ 1=svAB(EzWZoOx2U');
define('LOGGED_IN_KEY',    '-F3@-[rTt4R[^nl`C^3w:PW0qokonU3I7x`KF#p[G-bk.tzzr`62lfs9hLVn Am`');
define('NONCE_KEY',        '-_-E|)b1)2,NP$f?t<QXMX M+m[3%Wh{{v8_|~9v4?mZTm.$nfM=W4A c.W;vhUm');
define('AUTH_SALT',        '5ptM/vZ5n]}v+kxQ;(uC7+RUk-{ca|-_4}+ITV3<lNciy+8aHTp)*-31.b0)+Mm~');
define('SECURE_AUTH_SALT', '<jn0G_ {EY+5U/!|y=Ag#_)K$R{dg0*MiYH=|Q`H6u1Bd.# k60k69jgT/T:axGk');
define('LOGGED_IN_SALT',   'X,Bc~+>P!phWy+?GS>9SD[NAIa4V-=)q,@EF{;f8!?1q~?P%]5&:_-MMhMrX[k3A');
define('NONCE_SALT',       'q-J4+:P-s?@b -Km$|HLG8<5N*^r&8N?br-z/XMPaD++%J ]=-(*vHP oo%`GS/#');

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
