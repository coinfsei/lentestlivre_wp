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
define( 'DB_NAME', 'lenteslivres_wp' );

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
define( 'AUTH_KEY',         'bv7yJ<;lr23^ShhoU<tHI/(+z#L^-]b%|&y_G><<>S3z..UsD+D?!fF<L@5rDSK@' );
define( 'SECURE_AUTH_KEY',  'N)WIvIh+lP$WC4c3Y[WKw)CF9%N85nSJmY/Sz3~,4C3oE}]U|AerAHvE#*,n(F0e' );
define( 'LOGGED_IN_KEY',    'u|b2[jN%[t5,a=<]<V=Lr!KJ8- 8SCgKM**M/:4{0Fd$^([{/F=QvR`Pzto8mftj' );
define( 'NONCE_KEY',        'YlrFoK)yp59Znz<L$DnWQE4UExz<7b!~,nP|`|]xf_B+fW:edPg*X)&-cfT78^aq' );
define( 'AUTH_SALT',        '|rS9g.)vdA1Km|N^jOZnu@1p?e[KKLt~s@(aaOsfrZ~dIx3*lu&a8!Mg^.|PMX{N' );
define( 'SECURE_AUTH_SALT', '36mX~_,qp&|VH2yp$)&rRc#j)Y/Z2HIpUdZg(e1F|itoNA<ER*;T@h+]`J9v/?D9' );
define( 'LOGGED_IN_SALT',   'Kl##g4kGlfHH64wQ#6sM^t$TJ{1(-!%D+&W1O+z S-?o>{:)e2mO?W0s+3%lb}jx' );
define( 'NONCE_SALT',       ')q5I%v6c&T<,+ a*(1`X/&mv+IN-}cAO$+g?2ZTuLf|[W#d0=J;RH**up^|^`H&[' );

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
