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
define( 'DB_NAME', 'proyecto' );

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
define( 'AUTH_KEY',         '}l2k73fx1%jA4A_4CWcZ#(P1Q.Rv}4sY-]8b>`vnJi_{+&52o:zlRnNa4I(K<`Uo' );
define( 'SECURE_AUTH_KEY',  '6aCe@Gf;{G<9Lk?;T)CYP@%hbUVz;FIi+?42XWDU@rfZ:!Y+3aU|avwy-oEye-.5' );
define( 'LOGGED_IN_KEY',    'L[uL~Ed)wRVbZ@cX*e0M1j:<bV@pGIcN/xsb)Gl*U8!48}AkzZt@N[T=TuZ6voy ' );
define( 'NONCE_KEY',        'kQ)8WMOP:J_!WVlFF12jjTbIrxd]>P?6Ct0Sk6l31A/T*mZ!$>9G|gefE*~z:2W7' );
define( 'AUTH_SALT',        'gHQ^T:6`3S@a/7}5Mrl,$kpYw(lmB ZJ#Lz$Qx5TQQQuwsa~v)<|Il?$.[rh #-6' );
define( 'SECURE_AUTH_SALT', 'SXpoxkP7{%LJKWqA#2^J,KeXq&J%~Gz=W],^{i!L(dJ3wPe9*1|K=_YA O+nXS#*' );
define( 'LOGGED_IN_SALT',   'zsg{s0{yX_! </IwnTVL1hlzp)6SU@{#|9za(v}yi@7=Dute_{lO}gr8RxqQ8GgS' );
define( 'NONCE_SALT',       '`y@Q14Wx.DjYz98GPvx0,Sf|e!aWp_(Nq 3%BgIJ^P8(XJt>6*BxJB>kW}+r6miO' );

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
