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
define( 'DB_NAME', 'marketingmethod' );

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
define( 'AUTH_KEY',         '{|+Wn8ZmNtg6K71,E:7u+asr8m:]d[=2J!xg  ao%C;T>k{xg(iP7yk;d*?F*fZy' );
define( 'SECURE_AUTH_KEY',  'kY#!1(;wVKED/1ZXDJbydr|GP{PU4iol~,>H$*Vd%pw&jxxggf}=,B`@7dYx8cCP' );
define( 'LOGGED_IN_KEY',    '.L}oDo:}xIL:/yfjAui]<a^S1k!m%z5z 8?4mu.3}JMwGcF=nC{Mz)T>qMHsw%n5' );
define( 'NONCE_KEY',        'l.*;Z.AE*^?rJY49X:d=S]-s &D|T:N5iC}ZAcY|TIw=2oE7VGbha0c,m g-BQS(' );
define( 'AUTH_SALT',        'bOYZMoMVK>F>D;xSB(h`q.9>EZv$r}%9`xmo]_)in&86Y~&p88]C;g5P@c)pjVo_' );
define( 'SECURE_AUTH_SALT', 'dwmIm}KYNpnCFHK%Gn|yd Vp0W{b%MD1a`gu$sosx`|#0OY+$$e?_gC[CzL}2Keo' );
define( 'LOGGED_IN_SALT',   '.yMP:bY~ YWn$PbpeAa%*G*#,bw%*7Plzm49LhP7:=472fmDm*@|_$w[[!O,x3NI' );
define( 'NONCE_SALT',       '//XQg>3{^+^RjV:1I@5*lR~P/AB,/;MDB=2h`|*F,7*U}dE)U]66[I=Z]Z|iitW4' );

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
