<?php
define('WP_CACHE', true); // Added by WP Rocket
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'singleportfolio' );

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
define( 'AUTH_KEY',         '{@MOCy1PEJTQXSxxK*E vXEuNSZz%Q{qB{FF`B:H`[8i,=OO7A2jQa<o]I&`xJM]' );
define( 'SECURE_AUTH_KEY',  '#u]B6/md`6J&7=u Pfo141#og79!-Opf-ikF-*Ky2vR`rd&$B`h0|V.W}=$/fzD~' );
define( 'LOGGED_IN_KEY',    'c-EPpKZzaq}t:T#9j^.Y-fR=B{Req^{d*XK&%lGyOIw9z d*te#BAygm(j]|?X8-' );
define( 'NONCE_KEY',        'wE[j(&4j0B<s~Bjml$Djv19yAYPn`c7*9&xmN]b [+rHV&qz)oxD;?t. ;S =~8D' );
define( 'AUTH_SALT',        '`3-7oXC-[IQANVGvB?4*1=J9Wv:$0!LrR@>OY~O}nJ3eypIOkXrV>Xc28}OY3T0e' );
define( 'SECURE_AUTH_SALT', 'bD3koRy$t$U}oe<{|NN7K(CO.<+:!Eu-1zmr n76ITc;6e,/Faw89]v2S;Fucl)8' );
define( 'LOGGED_IN_SALT',   '4{z,0#E[Jm}>T[Pe:ZT:8`3bkoQD3`06qm|VA@)A;#c@hS$N%D>KpWc,O;K46.fp' );
define( 'NONCE_SALT',       '7xV=Pr./DGPsO<rh#OnGl/@|mVJf^2q3AfyOXmb s!{(`B$tkZ~kpV4]_X9m =LD' );

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
