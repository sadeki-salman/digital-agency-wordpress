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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'digital-agency-wordpress_db' );

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
define( 'AUTH_KEY',         '{=wh=Wz( :|unio)>( 2T_q#M%(Y j)5~i~=kBo!^eI W]17v7Vut&Jp$0z`QtoB' );
define( 'SECURE_AUTH_KEY',  '^ctBZ/:PetH_n3/CfV6nh+a}`E,E*?gAAl+/UI8#HvGnF4J2<^mzh=wUE*|9b#Q@' );
define( 'LOGGED_IN_KEY',    'HDUMLsqZ#j)u^hf f*e/.l/|x9X4brT(Ro+_l8XvnXDs$B[z)y.BO~C Bb72|El4' );
define( 'NONCE_KEY',        'LUIg.c WFJ9X=T~LU2S8YnHX0_K(?Ht~VjM8ld5B58awAdPq~0u?._L9 En%6dCz' );
define( 'AUTH_SALT',        'm,yJHZ+/*2`rZfz< ]r!tR.Cl,6cb4X?HW,F-pa~0E^}_ahpMC5^`*73F(@9~3sO' );
define( 'SECURE_AUTH_SALT', 'pEV<{}#AB#>FuSw;Y[yg}&=#Ic!$G?Xs-h0r}Du9|hsg^(:$a{N=`!18E78t!EcC' );
define( 'LOGGED_IN_SALT',   'TCF~4tB|c[uGL4y`D+Q]_F>woJKXs@rZXJ^>5h1MQ.z5+s@Lr1:E7^;?w|-+I.4n' );
define( 'NONCE_SALT',       'YKW8MKODa~x#Msxj]N(i$TLW1qYq9O7|>B?xglLo8` CecVd4JJAF7miiBIfc{O$' );

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
