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
define( 'DB_NAME', 'braxit' );

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
define( 'AUTH_KEY',         'o+jzcvna2X M4R^56_R$?}<oQOwj)Y:]x)tG47`2!KuRbI>s&xwP$?xf+J ?9c$%' );
define( 'SECURE_AUTH_KEY',  '5gIa-n@(C`J4O1>Bq9BjhF6KF0:pB.S5z|%h`i-E2UKhtWrT,idbB6@R<|< GQC0' );
define( 'LOGGED_IN_KEY',    'O_)p;v-waPvMI=n|*pkD-=_LInzmU@g|HUYm2>~+B#Ev>|Q*;qaT/5O05O=WC)xC' );
define( 'NONCE_KEY',        '#4H,$x88L~14s77Q~pH/8xVEhDI1F&GX8U/0Sn3@,0y{6BKm:IF4J!=p[GdI)5SY' );
define( 'AUTH_SALT',        '7>r^x:TQn9;vt:sHaaJ=r41RclemgWyLkhB #teHZ.I sFoB/Afw*-@am!EK,,G/' );
define( 'SECURE_AUTH_SALT', 'sF=Z[?[9U~l,ZYs:4ESP78W7!xf+N_y=<)=?N8B/X%jBA{9CZH=G]gg^o?S}48&Q' );
define( 'LOGGED_IN_SALT',   'A*xG4E00Z4)6$P*T]l88rCzh6A=R?_+d|TB@J$gzvK6U6VyZtypBB<s:YQ.3@~)l' );
define( 'NONCE_SALT',       '@kZ1i=!w;@GJBTC(msn|wyT@s5Ogib,B!:SV{}k XRhZSZt)K;%S2mj*kH yz T)' );

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


// For ico 
define('ALLOW_UNFILTERED_UPLOADS', true);