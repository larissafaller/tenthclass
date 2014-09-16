<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tenthclass');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V{3)R0.DgkPK)bZjh*!DS,)7vMwmO+l|Bd2nG|x0R3ap/S|@c{>*9;g6hy0<G>o<');
define('SECURE_AUTH_KEY',  'HkZDQ&&:(4|{Kh-<E|t2R~mT,&]l6V!OJ>*lr%Kf}61/Bb*O_+Y0f)W0QI*#Y-;F');
define('LOGGED_IN_KEY',    '`=9F3AxX*Z^NmFChM|/-KX/RiYk|pQ.2AO#T+x9N~5HC_Pj|7w]jF/|?{Vn#8=p`');
define('NONCE_KEY',        'TnEAol2jMv6zO 0-Y!q/CT}stI<(s_t/%!kD9[MN$5h|iVj7GA+LHf{h<oS:=8lx');
define('AUTH_SALT',        '<+:6J|o<@-~.$+CbNN,;SgM&+U4;yl{N%|Ep]{8!#W3R4=:QVM@S;JY|,*hayo|r');
define('SECURE_AUTH_SALT', 'QGT(!9bk6oKA}1Fp0qc5[y@SR?IlEs[Fj8Z*V*-Hu-%YW,?[eMS|iuDBe*r?k+xP');
define('LOGGED_IN_SALT',   'N4/f%9^8_ha|9/p^4HK14b}(HP_hN,tG}&SK|FFH51,f(-B+Cran#kQLK#wb-BmT');
define('NONCE_SALT',       '>ufTcyyx+2/,H~D.tt[LQOcW/@|#k$G/Xtz:T&vK~jv~0h}X2m~]l.ihdhFw=zI$');

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
