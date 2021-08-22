<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'online learning' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Mz_dAqq_OB[<plaM.u|_9RXrg=cZ?l,1S#iJOnP[*hC|tC^y4B+L?`1a22UvC:D%' );
define( 'SECURE_AUTH_KEY',  'sD;`>{_Q<|Bp3qj/1}> @u_h,h6<Zr;4S?m{le)]oS`Cx(,hSwZ.|@/WJ+BGJ-iQ' );
define( 'LOGGED_IN_KEY',    '> @f#m^VG-R(Gs$.? o8WO,M c%Mk#UWRwt`+c-wrC V m|#A)nQi;3(YS2IxA<,' );
define( 'NONCE_KEY',        '?)NJX5wr()M$+vMIu,(*Uufm/>Ehkqc_w/(yHPzaW|&QK/iSP#G/P.;+grA`i5@]' );
define( 'AUTH_SALT',        '%1w3WHB45bXxs&&DN:1/xO#.qG:y|{ngfDS{u/.w9|,~zGS0M+KtHl>NApB|h3//' );
define( 'SECURE_AUTH_SALT', '3ee1wp*Onf( U_V]O:pNedAQ+orYAT.,d#?9|HwU#C:~DH{sru_`?E!e|BCMLD!I' );
define( 'LOGGED_IN_SALT',   'R1G%{6r,GvAGTZL~ld_<i5_R6DsQ)Ky!:=jFtJ!o!6n^=izUj9>jW,y.`CA}rjtG' );
define( 'NONCE_SALT',       '.G?H`i^mjE<>F,Q0c5JQ@&w}n6 r34A-4>0GRz3Us:8GBG-(1Z9b+IhT+gt]6TLh' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
