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
* * Localized language
* * ABSPATH
*
* @link https://wordpress.org/support/article/editing-wp-config-php/
*
* @package WordPress
*/
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );
/** Database username */
define( 'DB_USER', 'root' );
/** Database password */
define( 'DB_PASSWORD', 'root' );
/** Database hostname */
define( 'DB_HOST', 'localhost' );
/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
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
define( 'AUTH_KEY',          '1wTH7b3k?8N@5Cd~*Wf6G=vn)sqziJajpox[yLE/Z;j*~sV]N3E3*MRlW.t K<H>' );
define( 'SECURE_AUTH_KEY',   'I_K*ABG4qlr|ITBhAk8Y@]WR/{CuM)XCMcf4UUX$R?Yo8-f*wey#(3{P6J /m6US' );
define( 'LOGGED_IN_KEY',     '0o-q&xQ`RO?1k*l`3^1}23rw)7zL Y,2gztHn5+|J.hI%qnoXmhF_!<4EY?U);o|' );
define( 'NONCE_KEY',         '-0<0Ba2Ygw_yhX7/TZw1Ejb$P/jnmd`mcs,{y}gCC}>@Ue8)WgpmV? &BL0Ghs&X' );
define( 'AUTH_SALT',         'Rkms{?qJFJB@cGfF(8<N)z*O&EFVcOmCE!E/.C+Y=U^6hv+?!G]a:^~&UxwG}r}w' );
define( 'SECURE_AUTH_SALT',  '_,qj31+?(gtH>^}4OPR=?5koZ#dT46*;V~nWf+l&!YCE;75ve%UdYSw5GGhOe@Cn' );
define( 'LOGGED_IN_SALT',    'K|9L7TjL{*3K^(H9)?`nAkZfb9pI]Jpo3MAl51KbVJosIg_zQ7Gg(MnEGhK=7Eh:' );
define( 'NONCE_SALT',        'z_!Ff`G=hP3!5F#{HieO5(zQ&!d[E. r}-N,R-:9k$L)SmgTA>E3K*2m{=(.Be.P' );
define( 'WP_CACHE_KEY_SALT', 'i`4/k7!eXpB#]*Tdk5m-g4h4nrD5`L*U~x0<Jn=2<kxb+_i}b[6Ds8Wc63#hs~xE' );
/**#@-*/
/**
* WordPress database table prefix.
*
* You can have multiple installations in one database if you give each
* a unique prefix. Only numbers, letters, and underscores please!
*/
$table_prefix = 'tribu_';
/* Add any custom values between this line and the "stop editing" line. */
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
if ( ! defined( 'WP_DEBUG' ) ) {
define( 'WP_DEBUG', false );
}
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
define( 'ABSPATH', __DIR__ . '/' );
}
/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
