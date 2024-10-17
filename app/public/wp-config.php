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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'EM.$Whx:ZUV:WD`,0x;EK2Iwb25CHg&sAG-Wy6#7ZVS!2~l.&`=hY#bB+6p@}DO#' );
define( 'SECURE_AUTH_KEY',   '=06JF/7*[j]O:fTd&{[6Acqs+3jyL]{H{!nc|!EmQAzob=# g3g(?BSYiWC^Eb*+' );
define( 'LOGGED_IN_KEY',     '/8*/#bX.27B{dZ<K<p`kf^VdNv?=#a_;!Gwj^|wNis2O)U6oWpZJS1b)mgr9qkV`' );
define( 'NONCE_KEY',         'R_pCY1sRZ% :8S#%08T<:cM1qn}k[5e;W}F~0`=NH&`MK`<|rDRxs>R;A9a9cevy' );
define( 'AUTH_SALT',         'DTAnZ)MFG.GTy+KImYx5I^! zjn9[}1_Ouwi+vYn-AvL!-kECh@9(2A,Lb|OaW3!' );
define( 'SECURE_AUTH_SALT',  'W+;:4})niSkB?NI}D&P8#=&8>x3/5f#$.-<:7QjC|P csM+*99,9@90aD0T wTl:' );
define( 'LOGGED_IN_SALT',    'cALePMhZ/`  :qcZ%`>h5p=5WW*c_8pYHkyZNZI|loTkS>Vz5yvkB;(thu{R^.-_' );
define( 'NONCE_SALT',        'em2BL_eU*i<<inNAukJT&*268lEi&(:l:0/N {JF?j/^+n>91C*(BzSV`{vIF7wd' );
define( 'WP_CACHE_KEY_SALT', 'O`N7^b|7&+E&QlVRwflJH[S `^(?TR<,z@gY$1QY!W0Ee__*&v ~:U|VJ>a5ctF$' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
