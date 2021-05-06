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
define( 'DB_NAME', 'yjs' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'mjc/]r%G}|-A9qx(vK4(&2J_}:*rM=SiO)NtxI4T(`5.y@fDVqHDmj2}Rm[e/[F1' );
define( 'SECURE_AUTH_KEY',  'x):![$d^<?8}U_<XD47LyLV&F(ry?~zj~t]@}ddsdCIKu:Vn1^5=ASYm<A[y#|R>' );
define( 'LOGGED_IN_KEY',    '4b^O;GjPjZCK)WCP/&uz0gq1e]32B6kQG2mOUeiaT^68WFL@+u:GOSKe$@DDswlR' );
define( 'NONCE_KEY',        '2_jIYd.dp:u~j@+mj4=0+JVcbeW,8Z*$ )U=[P*zx$G7R2G.p>cpf|46 )3G!bCa' );
define( 'AUTH_SALT',        'D@v}MXL$TjjZ#1U`O!N%v]qRU@^h;t:q9AjhxNH6T``$0! S2P9xtAi2=?Hc0X+o' );
define( 'SECURE_AUTH_SALT', '@~pJ>|:V;J%Hs~y|4ntUFtWNLmbb9{iT|n_u0]s/IWSTIK}Gv+:Y*yMS~IpW@EaB' );
define( 'LOGGED_IN_SALT',   ' >6]EO.ci4tE&#&J%c&jlM]5ty)!Y-`g]F[X(zCOcUG|ElR0-d+NKNSHVeHC0.!{' );
define( 'NONCE_SALT',       'X~8[UbjE3aM|l_ZaEd~&a}LnoIxQ0*HC))^&U`at*VIjiG wENpBkSM-#0w56WY}' );

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
