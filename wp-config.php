<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'igor_baza1' );

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
define( 'AUTH_KEY',         'oAeas.X}C$7#v+p9J`Jl;yu|#aPMSY*|kX@gG3kF8EU_5[2@v*_i]!}CuDumOGOk' );
define( 'SECURE_AUTH_KEY',  '7IJGm`N)2K[-^#dd#|{R+Mi/EPr)QkNJcYyqXzmTHg6>H}-{{d|fkWoG@Q<1MhLm' );
define( 'LOGGED_IN_KEY',    '!:DoL5%:|6D?)I<=vO{Wejx#X6#YW*>x;a}P*8alr&_dgMH9ls=]boi`*sm)~&iD' );
define( 'NONCE_KEY',        'dyoz$j%V {c#xM|x/rm,)9$(9|PgG/|w.!A_[:47Md0h[|LMbzE4I.3g@;kL:GmT' );
define( 'AUTH_SALT',        '0iUQ1r@Ra!0-.GQvR7!r<d Tjgt/M$#u3n]2YczwWy.=O3B@&5</01c:DV<uHZw=' );
define( 'SECURE_AUTH_SALT', '4aY5J6+k@jm4/7(OmJ/i[l+IoZ1l#bxwNOZ:=)qUe4:%t&hO3NO~bUN~:H-*hGWi' );
define( 'LOGGED_IN_SALT',   'q~#b6|*Y*P=hV <Z%Gqv<PcK<Ss<MMhMfWLDLZ|`E]`feV{6aGSa-67q65:=c@K/' );
define( 'NONCE_SALT',       '8kX:A9/w*B~so:fEbf/Gf1UC$*~.Ie3LL@igNeRq`W#J%)YLGDW{2&K~;]uT{90.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
