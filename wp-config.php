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
define( 'DB_NAME', 'my_site' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wppass' );

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
define( 'AUTH_KEY',         'vyRzBSED!5:Sl7Ns(doL#8*JtB1[=S(0Bn?mrRQlc1%:4K)Qvq|h2Ax-NsNcbO#X' );
define( 'SECURE_AUTH_KEY',  '1cV9_}R|$RF}ikZs;jh8OQuqxjU?Wtbq-j9h@gP%3da-zpRd|I59q)g;fKMQU3-F' );
define( 'LOGGED_IN_KEY',    '((3fG{e1$n#WD=4 jB ^{>&)6@{n8r=ggsPavwi:A}&MuyZYpc<bp@.dga#EqI..' );
define( 'NONCE_KEY',        'vd&>~Tm]D +7]{Qr6Xf;.Dx!o xzdaH_hDIi;vB4dL8.i$t_}E?SF6t2YlW+5=*N' );
define( 'AUTH_SALT',        '-?g-{0u<WfLDOk =QpAY__b)<;RVRnA(@<L$xpQQ<Q8$c#eDPAoWIPr3(_!Ab9W%' );
define( 'SECURE_AUTH_SALT', 'XW/&ah/e7iDN3.N,3~NyScFl>*{?)un/>+(#Fb]8nXev&c?[,5=MUg&.Q_?$;h8v' );
define( 'LOGGED_IN_SALT',   'o&v#B<!RLooQb;wqtR{87cQOLRq^o-k(rytFF[d]WQ]3K|:#Y^HHu>J /B(~EP@;' );
define( 'NONCE_SALT',       '#v~R,5^V/!g+]AsuNtrs9f!FEgK }5WZsJ|dV=8ro#PwvDzmcpqH^z`GH$tC6n]r' );

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
