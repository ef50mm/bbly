<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Heroku Postgres settings - from Heroku Environment ** //
$db = parse_url($_ENV["DATABASE_URL"]);

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', trim($db["path"],"/"));

/** MySQL database username */
define('DB_USER', $db["user"]);

/** MySQL database password */
define('DB_PASSWORD', $db["pass"]);

/** MySQL hostname */
define('DB_HOST', $db["host"]);

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '&>EAnny7|DFd9;SrWp}x$U[-}FW|.u[oNS!eq,}y4Sha%(.||Kq|||pXDutyK0aC');
define('SECURE_AUTH_KEY',  '=a|W9/mUs}]ZcWVS1-^Tb`h#]Xhi~ V0rMZx=+>MRY||Jj@Ag(G4cP!bQK*4IuD#');
define('LOGGED_IN_KEY',    '(K>[)+S|-]T6zJ8[s$>>F}g5pAaj--ey|gGsAC*!a9tz}4~x}`mI?F@_es&qK[_9');
define('NONCE_KEY',        '{p)jjmiE+*%-F`GG|LDMde6Vy=E5cq}Gs6FX4#$z*tKM@<{j.b3G.K}:ku]DWS-A');
define('AUTH_SALT',        'b>H+Q}+y0J_=qx)Lt9c#q1gJ-6_/h<v4u|-kZ{f9gP|d>Mm*FP|tG+IWV:rvN-H_');
define('SECURE_AUTH_SALT', '|-C<~v$-5NBL6L}b,3NcYjq*[acA`=)],0 $^~Hr63lxE6O(9=Lmb3>7iO_eQ+N$');
define('LOGGED_IN_SALT',   'j}VNRdBo)VjU8i*=j=Lyh3[/+SB({KsQzWRTmF2w!Z~kcI^MHWhg9bUf2E6fjeWt');
define('NONCE_SALT',       'ar1.yOAC[K+of<{x8o./@tNz6o^;C3=CH;Cj3<kl3WQusq=j+Paqk%bx!;M$E/1l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
