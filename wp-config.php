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
define('DB_NAME', 'wordpress_team1_organics');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'O}o m*Z@!GNVG#}rR{/W)/?#8:,NS|~: A>0^:~H&>3;<7|<V#2|M ~OUS(wxbPC');
define('SECURE_AUTH_KEY',  'pY.e4-zc;&<`k/1gFQ?ZxPQ1ujA:oh^-j]}zH?HIZD zsq)I5KgQ9wdgf,T*zW.r');
define('LOGGED_IN_KEY',    '?JR{R<tdTU|]ZrwVWypa)2v9^:,h[BJ&/B5I.pcte/z_$;uv!XW`-Uw-a#lcUDNn');
define('NONCE_KEY',        'F(|^E)oJ /J!v}C9C8XZUtQ3oUvO-E2EV{?FRk^E{??/p1v}2$xFgsW@<_Luc6:Y');
define('AUTH_SALT',        '=5i6Yzbn~`F!Xb+vi&J ry>iUXr1vPNAQC_9Gew7K1*|R@I?TrBBEMn=[|B[[S|e');
define('SECURE_AUTH_SALT', '_?kn4_b`e&[3SflhfSw*[/&j:33bnLN4sDCklCa-3-vx/^4UoEtg[NZpcRCa}*EI');
define('LOGGED_IN_SALT',   'a,(w1iIP/iH6GoZ06HG51yo?N//]xznL4[`:`PNcooPKT~J15guC@MF=86z.;~2e');
define('NONCE_SALT',       '8u]PoYAgjChd;>#lOPT9lPqOdX!%KPeL4~$f3QB>eNd-Kq|=)6Pay#O1}WjiNwRT');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
