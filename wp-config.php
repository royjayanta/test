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
define('DB_NAME', 'test123111111');

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
define('AUTH_KEY',         'tL!uiGp=*YjtAxiaBB(z,NR{!4?gGue;q7oQ%>#QJ+o7BS%G+x%PjTV1Myzz}*dl');
define('SECURE_AUTH_KEY',  'cFdzYHHVI%{iHblkb_ EqUpi6efg|9QtY6^TINN<v{!UCrt=`*L pn7A@$I%<*.F');
define('LOGGED_IN_KEY',    'U4M[:X1Tso49:xu$<Tt0%@|U5bx[=O4],8uq}hYF}2&rL=e{k#izVA23 PLNDG8z');
define('NONCE_KEY',        '%Ms.y}?qrWr0mZ+Z>NvCRS;|Ya#|ZWsNJ86WnbvQ-ZU{$/O@7K=FgtPE1j?h0Gt,');
define('AUTH_SALT',        'r~sW<e2([1U +u&Yj%*Ip&Wi^eBH^vE{StFQmE8FmS/<%i}ewkW}:n*#o(n?l/7~');
define('SECURE_AUTH_SALT', 'jr G2L7;Tx,`t+1afKcc{ mPhR48SDPm@l8zQ+EbTGFCXO*3]N0-v%/TK,5H*j#p');
define('LOGGED_IN_SALT',   'T`-o@k^=0u^q[4@KlqgdTxd (ZMRuenS)brhFH*E2^&h_vi{4EGx0=0yOB^*g[8_');
define('NONCE_SALT',       '|,:p/AfD[a;E<~*svQX`6Z?CQPQXO :w!8R:OeN4wdusjQ}*/&Bh4D}YK5+Zt.-G');

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
