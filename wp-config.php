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
define('DB_NAME', 'portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '0!`(q7B@:Th^{Gx@%Gx(6~FBt$45~rg5aQo/h[ue6o|O@GW?=soVE0`U=3>$_P/R');
define('SECURE_AUTH_KEY',  'cldi9eDJ11jiCF0+k10fd&A2Zt=/g[*<4C$&jNyrRrm=WM7X!X? p$9)uBv%^f0p');
define('LOGGED_IN_KEY',    'QsNtvjGX7jY3YiSU)gXA}4vyA}BI!x75Y*+;?4mgqxz:Z`SCP/L]Oh]O7`$HnhP)');
define('NONCE_KEY',        'Qv-DjH-G*5ppOK=]/3I,rpvK)GA,x,D7z~/R.j+y7h?x]tFs<Qym8aMT6+AYBP$`');
define('AUTH_SALT',        'Kxn4bF4*CBs&[J_?9s7/%?Om!t#i*}`!1Kk2adHesgN/7r9=|KYsf6StFT|?D%DZ');
define('SECURE_AUTH_SALT', 'yhbj%Jt]Dm?BHEt/FshTD n#Om2K^;wIrcj=l4AQHFqEmga_-,3|LQVsDkXK GZ&');
define('LOGGED_IN_SALT',   'WEP~KN{h3HzZ*v^B+:D*I#^dXE~/vQqf?B1@}k6L1,NLCrtv&[k<26*)~Oe^JkAf');
define('NONCE_SALT',       'wkqnU6hI*.:Ha0eZ_F1??ck5zp$>7mt}f)z&9~*oeQ!/dp[wCd*7o~VZ(#-z2X/-');

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

// TODO: Remove before deploying
//define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] . '/portfolio' );
//define( 'WP_HOME', 'http://' . $_SERVER['HTTP_HOST'] . '/portfolio' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
