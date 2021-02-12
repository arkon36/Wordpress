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
define( 'DB_NAME', 'wordpresslocal' );

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
define( 'AUTH_KEY',         'BC3u1;]]o$2~VcpGxWyI+Xr0t::=bgYY[M38+QJHGiX~q 3l9&.Hp4CzD1d:o,9f' );
define( 'SECURE_AUTH_KEY',  'S_^D-8AiY5yj7nC`VM0`y1x3fUzt#gQC3QJ6xQ`hH%prP6Bi/B$}Kn+rt(k+P`Y0' );
define( 'LOGGED_IN_KEY',    '`U);:h,j|Ww|U;fkhF27fi4*GK#UE kiG#]$R^T[{`rvN*8JU(RAndd>f`uxuP$[' );
define( 'NONCE_KEY',        'EY.J1/,=Wv%2;Y<MME(%w-*Ie#kAFm]n+I7spm4l*mwX/mu)z>z1:Vb1KHc,Gv=v' );
define( 'AUTH_SALT',        'ObG9zb$F.fS}%eVZl>S&mH==)/sFEh8_JgWi^L S[n?Z8MOnD&<.]RIV-Qa]Ye:2' );
define( 'SECURE_AUTH_SALT', 'zl4SV0pup|p:)UI0y/o_%Q~=Q{0qVZi3#Q(&v)*~HDto&3(m7v&>i14!eXL8#Vpw' );
define( 'LOGGED_IN_SALT',   'k%EgC>UoU55(UO>7JpMpEt%mh:,Fmg7zh`0!8,fk6F!n9.1+y8PFyE{E<;P8:b*+' );
define( 'NONCE_SALT',       'b!Zfw9(AGF|HYP=.1XyWM;f(5d5@G/FbEEbkl+59N_]~->afx-icVa~7+GNZ zBB' );

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
