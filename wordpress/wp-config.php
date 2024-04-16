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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'D}RFtw1,81?wT3>?KmAP}J]2)=bJ[YWH bs?-U*r6*2s}v@[y{`aW|SEMP=LC(i2' );
define( 'SECURE_AUTH_KEY',  ':h7uRq+/)>DG8Xc%NZb3sZ}_P&xrH,K,^05`7~4c^6>I{5py<$=(-IaZMlgEw ~!' );
define( 'LOGGED_IN_KEY',    'j{V|#%+[6iP0TSO/-WpI0cXq_s~yQ~2D<E)hHqyysj/0LizJO/<<~sj55w(Zg,f6' );
define( 'NONCE_KEY',        'Pbc^G.(bP]VDR#nRJr!_X.$2Hyn.<!Pe5jG:lmN@}cq(iz6+edaMNPiBoU02]J8/' );
define( 'AUTH_SALT',        ';$Zt8V~wO9E:iXB`kyoVKG2&Jn#a,b!_%EM[M08nasvru_%0y<O4]J)4/1^:F$47' );
define( 'SECURE_AUTH_SALT', '207@1@7jt&xP[fK-Bpd:.RJv=`/kGTlf!=qJmz2=<8^S4*kl[=+0[6X}jGeE^,Cy' );
define( 'LOGGED_IN_SALT',   '{9vb{aX)YH!);Y6}x[z,#NscQ=:iP/uzW/FV:p~?SRDRTG?s_|[)JS^]Pj~Dwg5&' );
define( 'NONCE_SALT',       'V$>^$kz:N|7*.k%79tOkt)sUh=X/u~x!B!Euwm!Am4a|J<%hf0N7jsel[-q=?%Fm' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
