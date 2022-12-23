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
define( 'DB_NAME', 'epiz_33251305_wordpress' );

/** Database username */
define( 'DB_USER', 'epiz_33251305' );

/** Database password */
define( 'DB_PASSWORD', '72zvlSmNGxclVFB' );

/** Database hostname */
define( 'DB_HOST', 'sql205.epizy.com' );

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
define( 'AUTH_KEY',         '~her}nat.I~6ly{+[Znk)*VXbd/h=8zZlz#Wq4gR.6eS6xoDZma[Hz4;=:hswW(M' );
define( 'SECURE_AUTH_KEY',  ')}P!rd QPXwm{`2YQn h**|?Vl@4`8/h4^aZW}}rBV2fL&wXrhL{9)K1j+{HY|WJ' );
define( 'LOGGED_IN_KEY',    'V]&9wlp9~E(9A5m91vJ!@>pP6#otvYY,=iK:^G#vL#;j6^**=Xl.)P|dpUF7>!&x' );
define( 'NONCE_KEY',        '28pr6`s@2t{A@:=OTiyCk}GG?|vw:=RXD`Qaro+_`D%9gGq?GpVfQ%|hULitLa~}' );
define( 'AUTH_SALT',        '$aVuR|7K@[R>WYkXu Vv]=Ze^0-UQ{KL,Z-;9;Cu8A0R*E;G,^qH<kD/5VWQ4`[q' );
define( 'SECURE_AUTH_SALT', 'zx]:z.-vvC|+m^;o0EdO^Nna}6AW;LGNKR)%6I.~{f8FB+h5?1V.4 _!RP,dh46Q' );
define( 'LOGGED_IN_SALT',   'M/y*5MKDZk*[uw&&WUJ[]$YjJT$/gpqWm;ST:3lX>}UuP_#rJ%L!I~V[$?m5&3J;' );
define( 'NONCE_SALT',       'hF9C@L&[=D;qR*&yjEWx;~WxRly?>CC(1S.OY8aI-FfM$U{7h]`{w]vykR>__g(l' );

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
