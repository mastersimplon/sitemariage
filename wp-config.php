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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sitemariage' );

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
define( 'AUTH_KEY',         '$03~#~:<!kZYy|HOiK{oCtPR6w]5K0GlCz:cEZ(t8Sp*:svX[g]3LIj*NuLD*Ig.' );
define( 'SECURE_AUTH_KEY',  'HDIxU}:$7NN[EP4FbSq|Q3ZBWVYzX~@$%O99 u&mIlj.fd:#:4e^.7v<yyPUk iO' );
define( 'LOGGED_IN_KEY',    '%)=C>aAs;qErcs9}Rw,-jF}H)O}1-*y|b2v,{YG4:]/7AK:UF8Zbg?h6I1&#Skx6' );
define( 'NONCE_KEY',        '$})cu(XO0?SoWMRHAt^M!<r9;FV]HIhc3d.20hP:e4ly}6eWJDJ{X^ H)M1(m(t6' );
define( 'AUTH_SALT',        'f2u[b3vj-*:WhXUxX.RY@?5TFOE c/-qLn(*5BR}x^y+digQ%zGJ,2v=ZD7}Sygw' );
define( 'SECURE_AUTH_SALT', '%sp ]nQ($ AAGV:2tdEir.n|bih/%6CsLlTB:~}a4<5L%G$2EEs0UMAf4Zvn*0bn' );
define( 'LOGGED_IN_SALT',   '6#B12Ki%3&~[aZLnk3mH6B5|G_%Lg_8vfM?_x`2Ob;YHL&}!p]h8z`t;|_Xxe:bG' );
define( 'NONCE_SALT',       ':drq`EbyN&N%)GohQ#$<u`(+bYz(0XyePWj-M}X`&{7+CmX632^]<J?oIP>^cx$5' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
