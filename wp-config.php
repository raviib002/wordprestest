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
define( 'DB_NAME', 'wordtest' );

/** MySQL database username */
define( 'DB_USER', 'wordtest' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordtest' );

/** MySQL hostname */
define( 'DB_HOST', '172.17.0.2' );

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
define( 'AUTH_KEY',         '~eZQUh}*&{wqR#19=6:Ij4hS0qwH@d)2D&NxeiF<0B=`-d6Rhr`d~ZL}<)z{PV`x' );
define( 'SECURE_AUTH_KEY',  'dz?/OVb5o31fNnC+%g3~2d;tPi:?vz7nM[6UBE8>2p(De?nZFtF3ja&2<0]rJ(IX' );
define( 'LOGGED_IN_KEY',    'EVQvkq`sBntKp,+Bb 6qX95H^LN3V;52s5ryA#,>.jC&ogvNYJi=ePb|->s|<>LR' );
define( 'NONCE_KEY',        '&~Mnn)LJDJiwAwgr!9^Xc.Tt-+</58buC-=F6IUy5jS9r.m$V4eahnB+Oi.YrecA' );
define( 'AUTH_SALT',        'V&LCmZ 79j{%0<$1yI$t<v&kF3NfveyQJ{YL|o-?g>~E3_;SX gq?sNbAEP!A`ER' );
define( 'SECURE_AUTH_SALT', ',TjF,A-5?*EZ@{m*W{E&XQ$Jq!1`1 VKQMY#([[`jQ+32)Iel_=!7%VOZZ0Hqk/$' );
define( 'LOGGED_IN_SALT',   'r;$]f%))_^+^^3fT|UqIx3iepkczGf_V!|jw8{i?@9PtRB)b.:[-g@y3m:m4%XQ8' );
define( 'NONCE_SALT',       'V7%uVw0vub.KNr3Nj,d*&-Ah,UJS5U;U}!zv?Lg>@>S?Iu7q9t%@%{sqaxStO=z<' );

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

