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
define( 'DB_NAME', 'wordpress_hm' );

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
define( 'AUTH_KEY',         'ID)h<`[^H9k/#[5!dxFbs%]a|-yMr|RZ>yAvWS%$F^4B6u{CG1JiSNM+T_8W{i:=' );
define( 'SECURE_AUTH_KEY',  '6fv(/g7}gkN7Cw/WM@XeT4[qoF.k_zmaKyib)]|-6z,?KFo4e~JgBPIEHyT+F{_e' );
define( 'LOGGED_IN_KEY',    '~vm9$Z9K0ZsDaK2xltQzozBV~W+l=t{GW(kd-^J!2H1x+Wv#*0vc*uR%DdV*a*5z' );
define( 'NONCE_KEY',        '@x{=YLv]Exnt`ZjP`saIp3uAp}1VtPNo:SJennFcx 0212+02J6T0`:bLx@yVeak' );
define( 'AUTH_SALT',        'BHY}W!gm29[ 2IECGM[L(;iEK]ne_,)^9JHDij<}jcOV!axT%<!WuiZ8~g)YQzSU' );
define( 'SECURE_AUTH_SALT', 'DBu^7WLh`&!~sb-m_ke:KyE)0o@|k+<(cbe8iA1m~[@gGr1^A[nRz}Ki_6JS8Xmc' );
define( 'LOGGED_IN_SALT',   '8.Tt[y+L!A*hC$IG>+X+Yco:+rJ}*yGS^o3^0Ik>L(X-_hvc>L).+>}ro!/lclaT' );
define( 'NONCE_SALT',       'U2bnW#)K%<QlzS;u`GOBG;U]DY*,YCm&l:amz.O,|9Jr~4{HUp9p7la[DbZw:Ek7' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
