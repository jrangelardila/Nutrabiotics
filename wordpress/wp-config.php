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
define('DB_NAME', 'wordpress');
define('FS_METHOD', 'direct');

/** Database username */
define('DB_USER', getenv('WORDPRESS_USER'));

/** Database password */
define('DB_PASSWORD', getenv('MOODLE_DB_PASSWORD'));

/** Database hostname */
define('DB_HOST', getenv('MOODLE_DB_HOST'));

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY', 'QXD=-tcQCc7yI~zro0)`ttH~(+EYeH:Ku#$:|Cp?ni7iWf|q<oi?y^{!s,l>[hVp');
define('SECURE_AUTH_KEY', 'T9&2Qv1yg,9pd|es@>f:pIxA:U:t:Htc6zlZ,Ed3)X+*`*@V,3nQ;QotTL=AA7D@');
define('LOGGED_IN_KEY', 's7MR( &y#U2k|{#qr7R2.I,/,Y A?9utXT?p7fz^`-A.bOs}/p0Hw lI@4?S(2Ve');
define('NONCE_KEY', 'rE?jDEX9q|Nkh4Nk`xr^zKg& iZ7@-RkQq47m,]c3>&P`^g|9;a0rg4ri_rsw|J-');
define('AUTH_SALT', ' cw<d7~cOt.C_ZIb3J-H^RWa~aSL60G[O`/xjr:du|0HCOmpP^*Y!lUd7aW?4MLy');
define('SECURE_AUTH_SALT', '0ISJ@4H5|?un1qmfA0?a]s2d?sw><9B(K)q<6hE|8p]OccOue`mis;V5nO&63FAC');
define('LOGGED_IN_SALT', 'PzA(K~7k(iXG`i@]>$2VK8Hmrz=Jk;3#HDt5]U~Sj@i^g<rly_w{m7{s%Qt>D8*v');
define('NONCE_SALT', '}hHH%Yt7#JlHYeR,rug:.o$d:L! d=2Py6BtCG03 MoO:>rfVXOR(5Fh::k?|8Je');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
