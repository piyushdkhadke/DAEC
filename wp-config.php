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
define( 'DB_NAME', 'daec1_db' );

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
define( 'AUTH_KEY',         'FGV5UF.}kk5NJWX}HSofVafB/bCu8:79~]s{t_{(%PM5Z|0flA%m5QrqCu}`]SUn' );
define( 'SECURE_AUTH_KEY',  '_zi]wC}Syi0pWeclRS!%G0A.}7Bb_v|D9Ud|8D3S0ndN![nYjH(lg3sWGovTVj,j' );
define( 'LOGGED_IN_KEY',    '3@J|I3A_{Jfs<Aw.3Kt7-/hy$pSc8v?*qC8WVf*a}^<l*B1pX,3f!xuS}2+QJY=?' );
define( 'NONCE_KEY',        '-z|?:.[`|4nO.nkbLu)g{~o%425)@-^q=4>%I#}ewUGY0T;}F[2P(o_{zj4?732 ' );
define( 'AUTH_SALT',        'ZA>48/:(|t=Qtp|tp3BqknBn46Qkk$`V-viNQK2w73~1]ZkbBHu:-at72?/@i{t0' );
define( 'SECURE_AUTH_SALT', '^8hs(AlU%cTUR(~O+WI>Fk*/8Z!D=IV`,4C-_zfBgoH9g~SYsY)~{1sJP@09!,dV' );
define( 'LOGGED_IN_SALT',   '~aqS1-s:&8>OxY_$J7 p}EAlF)IuC!Q%*G+(oX+?]*w#;G!#^z9KSb_(|H3u=_>T' );
define( 'NONCE_SALT',       '}{T2@Sv9z/Qtvuj]~m[ MTs!-J)8}TCMR%V)Tzgp(R.:r=op-[3d[ktKiL: !r^q' );

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
