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
define( 'DB_NAME', 'local_wordpress_test' );

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
define( 'AUTH_KEY',         'H)1Bp_4/v?|gbc]!^-Tn></410}*=sHdc8224fS}}*Mtu7>PPm+)+k_,<<MvhWF[' );
define( 'SECURE_AUTH_KEY',  '6iv*6c95gL{p}-ju+:6^Oo5>(o)G&A]%+^7rql>W;;H4thkh;[Bmfcze%-,F<sHM' );
define( 'LOGGED_IN_KEY',    'K3=wSRQXSXKyoa*dikzA,&prr~gG+oUUX*]5I;hTLtK4Z!{fvcLFyh:)^o )]Qj)' );
define( 'NONCE_KEY',        'NQdeyfs{^y##v,bm`snW0%tH,rrK[<cAhzC.jdkAV`2F{(%ulX?.4zRizn)_z5L8' );
define( 'AUTH_SALT',        '!b_Y>bCVr0ExMz-Z.85!CidyUx9`SFTNjKB#*=mh1W}< R(bvHtmE*VCOz_gV2hM' );
define( 'SECURE_AUTH_SALT', 'Zt8N`4(}7VQ@7Lhf&lVoPx{H$e}Ra!fxf{wghHa.h.%0 N||6Pj+2p1dPd]MK_nF' );
define( 'LOGGED_IN_SALT',   'z=v.3g<22H-.C,}#Gb,`9!&$]u0We6<u@[FDuFxC(rNf,|2]D?ymEWVMPr@Km~1%' );
define( 'NONCE_SALT',       '-F_$5Q[%8gq.U)!qR! .>v})#E=Bq+^riH>`o}L +f[72%Hu?Ahe$ OT2<C%3_8@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'devvn_';

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
