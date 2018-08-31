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
define('DB_NAME', 'proyecto_final_desafio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0WX^X^pd%*YIT8<zpH ^nVoxp(?:8lm+2n?`y`w,m14@(;yOD}dTH]ET?lygj:Mw');
define('SECURE_AUTH_KEY',  'kp9.t7`}!qX}sS0cB9f+vDa%LsKUfL)V2q >{/HJziz;49MH@l;R$h8Rr$Q@NeQ+');
define('LOGGED_IN_KEY',    '-^&qQz.maetZb*s@<$)rN<y<xHk#V;A6(3Qq!ouB*{xvUr@lS<]#hADTU#!7o>V]');
define('NONCE_KEY',        'vK+(6)e ))z.MJ]!ZHW}-|k:%#rbf%iq37R?D$Rj]9VRq6<8I:NE[w4!`B3Rbh5j');
define('AUTH_SALT',        '}v5{-*Cr=^rN)xW]?BlS!$ac1dW;C4:_[<c)D9UZiW*sP+xIa|:HFrf3B6.c[hcA');
define('SECURE_AUTH_SALT', 'Xy}tpvRu1.?]*0$h(AZ>hv|T~^Bf/I JR]axJ@L|n1a*V/ZSy%&%DCR+iEL,Lq^?');
define('LOGGED_IN_SALT',   'QUBt4@+4!!3bCQw/Uc5V42eW]]YN}y[pXjNzv`-EwE1|au$p-&&F?k;eEOF{iFYP');
define('NONCE_SALT',       'A^(*<SS+$9+4M]rFUS/{3N^%$zY5Xn|swdEO{pOnho6TfnO/MCpWm+<OAw8.ZA{9');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
