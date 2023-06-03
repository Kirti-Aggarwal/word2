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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '@_c7Cf|N8ID<(#yfqE4P|znc=JME2IA@e$-h1]72~Dw]Ar+TYu&O_JjWx4U)G}r!' );
define( 'SECURE_AUTH_KEY',  '((CRtELq0zGbcwxxGFVz^c=cg#,i]|tE;#B>vxVwJ$~@HN?v[,LC@&@52tKnv?u5' );
define( 'LOGGED_IN_KEY',    'u0xpB1H?&g=10z[YGv^]MTEKb2`K!FD|:Q ViOnRb>p7C?L>re8<Wp.I?kr9v.20' );
define( 'NONCE_KEY',        'xV{ggFXCR/[Xh)M@23@]]Hf!Wi^QHB7loD%Yk*~W-LOOg-L _F.[%t6X-%ERa1{j' );
define( 'AUTH_SALT',        'HR-ppF>&T1+xdD_V +3[pd=?[]</D-<(eY(bJ)uV!M;-AWn&cpB/(8,VyOf*:]t<' );
define( 'SECURE_AUTH_SALT', '&KC%3EqP}]KVVk]5+ H]ye$:*? JE~u/n.3OMVpSZzb{6io>X!aK=!+u&-#mRe1b' );
define( 'LOGGED_IN_SALT',   '|5*8gvAZJK4T0c-ltV|f%+#Nr3+AstF-CUszaLOp7?BxPMXsl9x9rDGQ7>r#cO}H' );
define( 'NONCE_SALT',       '.036Mj6C!:*$[Wga6nIP:,qi7~7~66C8~zKSL)z/g,7;v}J4G2;hO=}7P-(}6|WG' );

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
