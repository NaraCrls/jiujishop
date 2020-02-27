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
define( 'DB_NAME', 'wp-jiujishop' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pass' );

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
define( 'AUTH_KEY',         'Jy~?NhN+>7*J]`kD={_hB?SsVASq,brU%PA!kgSEpI1v=e4-,|CjiQC]96Ia,h[M' );
define( 'SECURE_AUTH_KEY',  't-Y?@NY;}PQKY%[X&p.:YX!?1-4IDVCU_ty1UL]bI-Z]4nJX*.dau=2@+O|uDv}n' );
define( 'LOGGED_IN_KEY',    'TdyE[)Ig1KZIcnQ/ [;wvN{_tk</}(8U4^J7c&)J<{Y$1:F`)Ldk#&GRLFK&@K+a' );
define( 'NONCE_KEY',        'rg]U/p|,,BXg|G~g~:|NAg,%lg$O@8j[#cLGLnKUW1Ac;{.#HRi^LWoS6)ycvIRB' );
define( 'AUTH_SALT',        'J,0zV=AFtpvsZIfdQX(_U|j9Vg=,K*[y4Ex`;m4P|tZ0Bw[$.{v.3HUxF^_Dng}k' );
define( 'SECURE_AUTH_SALT', 'bjigCZ3a)Rz:Le)Su[K&B1AIRE.T~4W8o8=h>=.Hp>FXd<!3}$6#.>qx<KndLLTN' );
define( 'LOGGED_IN_SALT',   ' !9,{:mB3ZM:_P4c^6!!m(UMYgsvufBIOd:R,-$5}#57T~I4i*am?yaPf;Ge:f|~' );
define( 'NONCE_SALT',       'K-PwHI Ao3vMm9d}YT1$M+zhN;Mr1P-v;bbvH9Bb{qHmN=VS}!G-,n>v`$Ji_%ci' );

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
