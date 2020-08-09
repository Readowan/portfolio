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
define( 'DB_NAME', 'onepress' );

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
define( 'AUTH_KEY',         'rPr3E-F+bXty83lZ]%i;$&2e>6%TS]U{X*^znN_;(m_JqFcu{g5xGc/_B4-iz:Xs' );
define( 'SECURE_AUTH_KEY',  '8Z$%vAETcnCv?OlXp,M!M72fA7xKETj(rkIwaDjikz;-#hZ zO,MeP!:KYtj;h5C' );
define( 'LOGGED_IN_KEY',    'Jk26lrBu*Cxm]>c9[1;jJN_Gl2pvHahBUCxp^wG/2E3q9R|hP(r_Yjx@Y(X?a(8J' );
define( 'NONCE_KEY',        'lb-rA@fEbnBn2Ih7Kfr~S)A}:Q1,X[5+drhIREAg[>Hj?0[u[?eugw&M4=~A*7&{' );
define( 'AUTH_SALT',        ' feo5T}.# W98Rd;2?%<6s84dOd=HanX)_?N]~j6dFCCU;tjlMrHgH%+7(:/=s&B' );
define( 'SECURE_AUTH_SALT', '|Ut>8(4m/XAO|b9F{,V^i/#Hb*/nMW+WiM@f46vhQQFXpN>^O9K7O(BLK9&wHyw-' );
define( 'LOGGED_IN_SALT',   '@(Ldicib+?e_~>LLgb PJRPL)!eM 4m$lH?.~Mn-mul9syv%VbJVX&-^!81p$aQB' );
define( 'NONCE_SALT',       'zf!V7W4FaU(x%m.0o(4@i97,[*ii.a,mQ{cdr`yTh)^F~yB/JX_}TWWEF? ?0kED' );

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
