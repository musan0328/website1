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
define( 'DB_NAME', 'wp-01' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'JN^;G3m!yIuj,ryGtyFqyD`C!9nGA^bNqZkn1qk:J[M,a<<:sToB!SP<%T!*Bh[4' );
define( 'SECURE_AUTH_KEY',  '>T=uVN>@Av<l>uU)k;P2c(Q}X|O.;E}9HjhburwC!Yp&mqpv)2EnDL]$y=xKuB?q' );
define( 'LOGGED_IN_KEY',    'I?X>mhtB00KXmM|~xH-bIHQs! Yi<5KZ$~v NNNBVzisL0Nv7KOXgzIoDz8RFby$' );
define( 'NONCE_KEY',        'l5mLw.<(v$7!/qn<DPz&TRw;4Bk`b8])8rz5O`+EOb=BYj7O1i_OB}L73/A0dN?U' );
define( 'AUTH_SALT',        'PC[WWRqC&/L2;%k%lkKI+,SS|$3gnD1{7f!8tIqc6VV)NYY,SeO(=I:gjxfpRm1M' );
define( 'SECURE_AUTH_SALT', 'B/?lrI+7s+(e`~Z:n)ro2IJ:maT|XGiQnOS*vU,[t4{wG_#(sz kv&giT/`F:S+a' );
define( 'LOGGED_IN_SALT',   'r:oFgNxbah7wnXB$`=?zTEW.WAOV?cz:kVxIdXlg}tc$=~]M me~6,> ^DDk#t-?' );
define( 'NONCE_SALT',       '-4mS[&P.qXK<AL22q7y%!7q3XvJl=DO~oP{N3SFj1[0nser K}H1G;e`%[B*wo]C' );

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
