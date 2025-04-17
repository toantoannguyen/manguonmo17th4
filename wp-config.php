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
define( 'DB_NAME', 'manguonmo17th4' );

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
define( 'AUTH_KEY',         'W@%qAG<;}500bdc++!@Oz`D`zuQj/{~^KOO~nT>dx<+8sdF:5 tD,D.L3Iho>-v;' );
define( 'SECURE_AUTH_KEY',  ';hYo23}<om{%`.?,vH4|Rda17Vn:MHrU<-3C#*Nt//0v[2LiG$`$JbZOIMwWbIA=' );
define( 'LOGGED_IN_KEY',    'RP_PEo!4`Y,}3xCJ?M^=k?Y^[oLIK6O0$)}OAS  ptjSzY7C{vEMwOg*p9<=G@x0' );
define( 'NONCE_KEY',        '#}|bxIQQ558cQ2d(d5?)k(F=]r&aXsa8gY(<!K=$;$+YevZ +O>U#O|>T$Jf,*A9' );
define( 'AUTH_SALT',        ':cpQD#xMt<-A7%TqKGqYN>({Z${*ds4+%jUMdXQvD,%K*2m_^?UvZGE;Z@$t/Al2' );
define( 'SECURE_AUTH_SALT', '(,a.m?%m)QO`)0ah`g_(GHx+^%k;zyL?*S00m~^@%=^/4!O.Yo7i<(717HeI[f57' );
define( 'LOGGED_IN_SALT',   'G.lHt&H?j0:b9VBa/?_a=nB8~Zhr>!CN},=&Q8}HLscL0@+(_W_3M#Nk3)iA%?f{' );
define( 'NONCE_SALT',       'K`W19US93]?e(A52}(4`bF8qh59-yOO^MY)PK}8|_j|Wt6yo^soa^7sT!]bI(b$e' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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


define('WP_ALLOW_MULTISITE', true);
define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/manguonmo17th4/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
