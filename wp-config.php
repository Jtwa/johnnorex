<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'norex');

/** MySQL database username */
define('DB_USER', 'norexuser');

/** MySQL database password */
define('DB_PASSWORD', 'Eltawil');

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
define('AUTH_KEY',         'Bj;^X iJ<;Pgf#D+(;YZ(?K:b%^GT2m_A-q~V-jIYX*v>CBNq=b}|a&,FWB7Yyg#');
define('SECURE_AUTH_KEY',  'Sz80dL4jtQOCRKdVwn04br)l8]6ls`&&F+a8es&Rj4o,6f/+~Wwq2(JyUdq,/!Lq');
define('LOGGED_IN_KEY',    'egfOCf?)0yK8MLBCA`oK0H_^^9]D8DN]i_G;Jxw;rW{E.ijnQK,Xg.t|KbU}[b[N');
define('NONCE_KEY',        '$^DmFI()RELnS=sW)`xPU=^*:<ns1Cxz-]?NeH0J,C3~9#B9y8`1;oo%FF]1&Q<P');
define('AUTH_SALT',        'O!R>|Gz3z|c0{4||Q-+h@*2*~{oFE.r ^Y`j<]_,91Da|!BB#f)BbV]MN>dwdK_+');
define('SECURE_AUTH_SALT', '!ztj3vdGp.I1@Puc+6EDk]p7Bka8`u)K+{cUo:^+VwZUh?Z]P/St#.q4O+u(^5o|');
define('LOGGED_IN_SALT',   'j9^@,F+cxQ4#-p#P{y-E2|<]3w_jfTu3T69{Y=1,tw^NYhtc,-Z=T.D1BAz@?{MF');
define('NONCE_SALT',       'L|sk|XFF%r&7u:bx<Z-6z2_/d&iM-A!3?.oB0 )1Xhc=*7t,}A-uy+>U(w<C-_wr');

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
