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
define( 'DB_NAME', 'xsmart_wp' );

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
define( 'AUTH_KEY',         'O[J0{A[q_lo1J|zwOw61r1=tW;Kz9,jt>d1gcY L/^Vg?gl?PJ1gULXYPaV&Hq/w' );
define( 'SECURE_AUTH_KEY',  'g]Uv.k|{)I;@P{[%K%Yf/h[2N+C#vK(ukNhAFv,aPG:DQ~59jyuI~PGj<=8uF*x/' );
define( 'LOGGED_IN_KEY',    'b-K,]s,wY sO;@,(^h=h,Yu;xBP^gX(~IZa F!{*r,gx~<5vTc,O`|)%BMEj:b`=' );
define( 'NONCE_KEY',        'P(5eO<HH|Yymud)9u6W?9zNyv}d@9RegBi~rukyE)-[kj$ND@NT0H,>BRMakIG`+' );
define( 'AUTH_SALT',        'C=JgB0>Ju0vV:%~p~ic+E;BQ0#pC,IXv{AUMw[X(QD,wVYX|6Y 7y)PSVK^^<W$:' );
define( 'SECURE_AUTH_SALT', 'w>A` qnU),Ae6;rl?Jf-,|O-0&o!yYC+z~94,iY3?bnZ$OII_14. ^n3CKxNiOpi' );
define( 'LOGGED_IN_SALT',   'kM~JtK qFh}?kg/8tiGD.Buw?89 r6+{|tI$ki^cGM!3WmDdNg9$ZK7=2:g^azF$' );
define( 'NONCE_SALT',       'l,^v{!=yNiR&PvFJdyYt]H2_KU81lG`x*TbETqD#H[![OvhF2a7kR)v/ya_[D|N>' );

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
