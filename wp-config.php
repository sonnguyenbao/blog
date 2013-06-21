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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'tz_H$rTq5OR/gbQ:45/nIrTa@uFnTPH.FR;bPYS:E=WWeineb50 PsH0jlb+l~Rz');
define('SECURE_AUTH_KEY',  '#0XruLN-=[BJ`VYUzbr$@C x|SHw-).HMe9~F?E*i!D<kEk?<y$KEh5Dfd lL(6/');
define('LOGGED_IN_KEY',    'wNl6q}<G~X9|VT47eMH17q|i_6#nkqw./0M/jO H>C)$@(kG1hF/$2h8/`vo!kfT');
define('NONCE_KEY',        ' *G5)^J:&W)$1sAwr1/[c+qtjwiVLIkL@q7MFpY)]]2R(LebR4oF2:jA)%*`%Wtv');
define('AUTH_SALT',        '}=A*Vg!L@f;(N`];nt>aNO)J[S@ZuMH2$E1l1r+`1^|>%ps^|*U&G(gs`L2a*^~#');
define('SECURE_AUTH_SALT', 'LA-Pr|jLN ;)TEV[e%[0l2Bpr[=#{`]6Y*rKp+^MNO{J~R|(FESHf6Ur;c~}q-(n');
define('LOGGED_IN_SALT',   'WD 59c6i:dWXy<Wq.p@$Kd6+$je :$&@begV3+pfXDgy#zN%X_?;_xs&5B<vg~IY');
define('NONCE_SALT',       'DU%Y;]ke%?i9vr/!mT*](B%Ud!w;AEr]40_7?7v-CKAaPn%;`A0D|{+EA~L6&i6/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'lana_';

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
