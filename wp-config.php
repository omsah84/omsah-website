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
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         '9d`Jw`=YW:YIhf#ciQaO;ODFt/%X2mxQ$K*>DRj/o`}O3=yVk7[vyO0a~R>-vD(W' );
define( 'SECURE_AUTH_KEY',  '.rWxC}w3|tie<YUf2Yxs8*DR@7*8X4GLE8FrwBF@%u-ih`Y2O6b!E(~9x}p%^5Uu' );
define( 'LOGGED_IN_KEY',    'ZbeNc`pj;kn|IS`iX:M{i,Eo6t#_mbg~.>W}&XicngEbwyX{1]qC[G_xc*pO3N,%' );
define( 'NONCE_KEY',        'bbFFlw q~ObO^F0%nvrD<`^>7t|YX~_mS{f<:Ua?/zhvfive./.Tvz%>I}(KjRsO' );
define( 'AUTH_SALT',        'RH=iv`EC]Qh!WA9=9g[q04#6ZKDx:RsnrjryRiNZ&%(@@]Od7>>0B0F_-j|T8@)r' );
define( 'SECURE_AUTH_SALT', 'vH+by$V7EB0.o;}Dsg#)pxF~ePri={PqTp1P`eo!ByA=1vp#+0{3BzOWC4k:S+vU' );
define( 'LOGGED_IN_SALT',   'kS896 v[.bc|MWIj)[au=/ejk1sCrK7I+PE{dlDP0tkzlB?jj/PNHN{u9[Zj>gsp' );
define( 'NONCE_SALT',       'BT.YiIHV5`;us ^H+<9kcd%k)Jo(4Te%*I8W^j7{?zp<YWc`+1AR{P~im`<s~,{K' );

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
