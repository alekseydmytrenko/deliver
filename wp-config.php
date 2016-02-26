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
define('DB_NAME', 'deliver');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'v Lrz!uNPHn%+aF%2*e@fC}6/ d?IxXu3%5>?4lNxF;YqB#}QONuhxuT$]t|jLDu');
define('SECURE_AUTH_KEY',  'QSPBwbu$H#9,9+}2](Jww*N`hkCwVK_II[{+.FZ-Hb9F5ZsOqOo?BlIG@B-kpH?$');
define('LOGGED_IN_KEY',    'V@OhyMbu=C${,%6=JcX%+^m,jl+T{VsX9QYrfu5XPs%2*{_]/H8/>g|w]o`:%~]0');
define('NONCE_KEY',        '-N.62A}ilg*VZw^CC-ejqR62b {ujr}4K11?5<.jwgTL;V@iatk#^U;5%=A+^)wU');
define('AUTH_SALT',        'wToxnI/oHYz{_}vEb76Fn<E@0-[DsS[dE@sNcwFmVb?Z7RF;DHgkuc0bfA#Fl0$&');
define('SECURE_AUTH_SALT', 'A%Bh qi!Xb+=? 18xZjT8K9&JKkw<cyOsyNffx5u)?9rE3*Q=?Two6RQ)Qv(hGn|');
define('LOGGED_IN_SALT',   '`o8KP&BY:?*EbY?csXCGEP2ex-.HU#-+tV4Z9v-<A@BT=Vm?;A[%6=$(?r8O@8C_');
define('NONCE_SALT',       '4lNAQ*_lg#r[0|?$Ea5>$@-ul=HIVI2aI^ElPD+}|V^)v?K/Q| 3cEi.V2,v-x6C');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
