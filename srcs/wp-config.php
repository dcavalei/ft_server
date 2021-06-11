<?php

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'S<l/j={]M]f^BK(_LiEn]ul2ZMj5WJj6I P!V+I@WuNb](Fw:Xb+pcwzhu?~+-va');
define('SECURE_AUTH_KEY',  'nxEunFZEv+X+{ySIb5`v*Vu$%|9`0&R6OuE(xI85Uu=HcfPXju^&}F=DWH6E4^ND');
define('LOGGED_IN_KEY',    '6_|zlt/mB NhRNASF-xgG/z.,!@b[npe21Lih;uN_0kQm/4&&3-CBV&*ks{N|}~x');
define('NONCE_KEY',        'M01wC<8=?_|}B0S?75|0_;=$5lu:0{[w|6>sL O ;i<}2E`re+q+RN+1V0>>>8bB');
define('AUTH_SALT',        'WYCsA{:m:1,#8!u(q]AH.Chp]j0^nIxXWT~`l1oa}W#6PRp)|;u,,7k1B2m}UY1+');
define('SECURE_AUTH_SALT', ';%~|L~|XlA-GyC:NW9!91@`{F%=[!:-4g&LKwbf)!le!o{]wQ&g%(jW8+&0eyjAB');
define('LOGGED_IN_SALT',   'p+=N1[jLb~$a2zIB:eve<dF+FWpg@eKWe922tWpbmWwkb.uH,IWe@pCjH]3uN6BI');
define('NONCE_SALT',       'nBLwlvC<K*t-|+.-N]w>>WTRfiw82TcF}9kNo +X ^Gzx)R(eckvt-&LEFOS9D+=');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
