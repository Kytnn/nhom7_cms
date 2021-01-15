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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

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
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+73+TGqiXj/bKJq@]N<Oc5g@n,CfWzHEI0~f:l-eoHz)bcV2RgB~,-oQq@9SvIV}' );
define( 'SECURE_AUTH_KEY',  'I P)$w#J)>!r`kcTxQT<E2[$nzQ6O {/k^tP0bZ/@m7DohHZ8B4vCs]c+zDF_0>G' );
define( 'LOGGED_IN_KEY',    '^&z^a-P<8tyDkHFfy87$uP7z>F7u,GrOb{UPFHKvjbF6`ndrCvaC:|}5q[N?*f&0' );
define( 'NONCE_KEY',        '~]7JHEp a1Q&O:bI((8$El!%@gUp%Ol|j,cmJaAz!zW,N*M2Fe P;>L9s)?x R* ' );
define( 'AUTH_SALT',        'R#jt}JXd~xeAD(p^%]GG64-W)K63vSs5V+(XL-idT)VMQG,Ngt3Qi?&NPNqKOqA[' );
define( 'SECURE_AUTH_SALT', '{.w|LGa{TOnJ#&Gqq4?/aySp[(6EPig1O,&)%2i&]r@HXOKkn7om![1`sx| )A]2' );
define( 'LOGGED_IN_SALT',   '1DJ.o% s/XQ9J-|[5c^H4^9>`.,x99KIA4V6GZz:S~`$U)ZL&Y/{0gq{1(8yu%.A' );
define( 'NONCE_SALT',       'm9]i7o:>L0h3pUODqtHrQdd GaYDD,$GXcGdfxF)2|-S{,[c*TmTGGhPdh6u1RiF' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_nhom7';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
