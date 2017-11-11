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
define('DB_NAME', 'toni');

/** MySQL database username */
define('DB_USER', 'toni');

/** MySQL database password */
define('DB_PASSWORD', 'toni');

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
define('AUTH_KEY',         'sb)-F&F/Jqs^94v,a5hr?)OY$Coz4lwl4-0%<8&:s-PuVl#+_^S6ZWB+foIj=2KK');
define('SECURE_AUTH_KEY',  'QOK`%O@ Zk=1X5^,gMC#ysl@dfY}%`L_kj0d:qm(hk7GnVgJ}7S0l2$zxZsv+=!1');
define('LOGGED_IN_KEY',    '@D:z83ps2@aGUB=WzQLlaM}WkGCOD1aQ$0cI6UJL};eWnj^+.]J`:xH:cB!`7f I');
define('NONCE_KEY',        'd^FBv_9+^wzhODriou_+M9!sAw[fC/G~ /n.{(?0zV8,oAp_NCXR-w# [7UnGB|U');
define('AUTH_SALT',        'EDg]t]WP0~=.fk(MZ1Js|ONI3!~}e<4S)z}sb)>1<Az;_T:I6l{{4y-X|DlS}zw1');
define('SECURE_AUTH_SALT', 'V_r55EQb4jZEYA*cV%$4LD6mXOhN8GG_wi$w6YNRW^lSy``bu3k-=|wyTB@JO(Ge');
define('LOGGED_IN_SALT',   '-Ae2ByY$c{{d,}NOq|)(~)=vPiYmvxsRq@eXU+jadR: k&(D9^!06I<G6_wFnd@L');
define('NONCE_SALT',       'qSh:mbp,futRKr]cF;()QvT0]P191g+=h:!_*}$TxoA/.|=Kp!w[SZ#b,-Wn4`jJ');

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
