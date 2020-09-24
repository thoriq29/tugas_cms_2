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
define( 'DB_NAME', 'cms_gogreeen' );

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
define( 'AUTH_KEY',         'lQ^k`|93`tAMb? 00_&2[Uc&D@1(!x,.x6/xTQ~Tic?$R`_wlAxi`w+RJcql3EYk' );
define( 'SECURE_AUTH_KEY',  '@9G`3Li,mheK[aUoeP]kwl+fe)Udqc%7/t?yk=l(jI.$.z%pmqlZ7A5+(BWK)-_ ' );
define( 'LOGGED_IN_KEY',    'RU!7@SiWtK94RZOAJCUHV${bm@jYpYwp=N#xw0_EC5i)3XG1ii~-zDo`D4l)*1c}' );
define( 'NONCE_KEY',        '#}Y-}@xC/Ql=kR=4:!)`h<?AA4e6cpyN?+!b^Z27.y|S#&MAu X={%1@NCtz=<q+' );
define( 'AUTH_SALT',        'RA`G&jsNmu:(#6_pEBS$;rJ-@.7ne:w.!,gZ6N0;SXnj^%%$J./&t@Ta{D,&q,GY' );
define( 'SECURE_AUTH_SALT', ';qVd,+4y-R<28dei^oDTt|]{TQF[`(U(3+q(Z!59v{0&<6#w-~h+c!@#Nf(fw/+w' );
define( 'LOGGED_IN_SALT',   'Sj%zqF7SBO.__V09VBiP|SO7nyffM;Vi,]XEt(^91-^8P&&0-62:fA46?@F/cUCM' );
define( 'NONCE_SALT',       '2HGDm,xI*m;[=c.%>CQF`&E:6.~emLiM|7^4!.3Z%M7uZ!Kk mJD&Q-&[Ss5yjVx' );

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
