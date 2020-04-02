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
define( 'DB_NAME', 'dbrealestate' );

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
define( 'AUTH_KEY',         ']T&(sD4lDc1$@Q9/Z~oY+k&K.H/xtxFGaf%)9V;>Vk9h43M0F!xO:SA7[/*SC<>*' );
define( 'SECURE_AUTH_KEY',  'ogU/zcRh;]Na_zD@ VGv<|bC:Hf~f>K7EvX@0XN$W7~T3K_DUQ}`X;HR8<uh?FDW' );
define( 'LOGGED_IN_KEY',    '1[h%P|2<TQIz]L{Ol^{RG^S=96]Cyafj3IM_S%K-H)V.+e~?XiYvd[R]p@t~ljR?' );
define( 'NONCE_KEY',        '6BvC1EejDl$J9l6+=AD@H;t.q?(=~lz8OL1|[^ee$aR8#9VyW^V8C#8u$U6N5V{b' );
define( 'AUTH_SALT',        '$Hxo^#njqas*|/-Z[ftOjh:!,%j]+5/Q(J,=r`#lz wY:T6O/w$[=_(ab8q/Z@Ne' );
define( 'SECURE_AUTH_SALT', 'bOs7=OEJku<.5of7blA@p&4())NP~/JBwYa7Tzs|,P0!5K1~MnZLv3w`F0;e|<z(' );
define( 'LOGGED_IN_SALT',   '!)=-W2!r=ntPu]xVVKmQamS fO|eG-pPIg}-1NA+:1PTLuUSkPStLBv~`+yu]st1' );
define( 'NONCE_SALT',       ' ZEY13pd/F:V!0oP!T#pAw5cd|z1`0 &b|*O>9/ l+O&molWuT|cMMB )=Hi)qPk' );

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
