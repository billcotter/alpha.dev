<?php
// ===================================================
// Load database info and local development parameters
// ===================================================

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

    // Local Environment
    define('WP_ENV', 'local');
    define('WP_DEBUG', true);

    require( 'wp-config-local.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-staging.php' ) ) {

    // Playground Environment
    define('WP_ENV', 'staging');
    define('WP_DEBUG', true);

    require( 'wp-config-staging.php' );

} elseif ( file_exists( dirname( __FILE__ ) . '/wp-config-production.php' ) ) {

    // Production Environment
    define('WP_ENV', 'production');
    define('WP_DEBUG', false);

    require( 'wp-config-production.php' );
}


// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/alpha_content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/alpha_content' );

// ========================
// Authentication Unique Keys and Salts.
// Change these to different unique phrases!
// Generate these {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
// ========================
define('AUTH_KEY',         '7Oa(F$z:^|0@;J1B;sLo.F8N{mO))e+@#iq/UF$ } EG-*N:E|s9|X+{|+GJ%`V3');
define('SECURE_AUTH_KEY',  'L@Iq@RGVy|Z%z[GuT<NUy6zY*6`?-M`pi-BQz$D@VaQn|mZV{;?x/FZhwf10~h=j');
define('LOGGED_IN_KEY',    ' |t|M9hlOMI]pE=T,>m9nUwAtPR?HN!|3k)MU!_6pZ1Puer-L-{q1v-)-7k;e9A%');
define('NONCE_KEY',        'Q E]iL&$ B5.3aF$nqItCSrD]jSBKK2P2|3gt@Wg9!eIWaFz@wk|`4?SFxAh;E8O');
define('AUTH_SALT',        '6.Ny)XT0~_$VnIcux--bYuz{a:,J3@JT0YXZ=*YJI[vjq,YA;0evQS 1&JwI|cG[');
define('SECURE_AUTH_SALT', 'Hlw.*WH[q5+M^!J -MNu_swSJV9F8@u2U+1y:?~-4~tEn2/G+|zfvF?oX/?-.nHg');
define('LOGGED_IN_SALT',   '`m3]-_vIMPcH$WQ.2O+>nR5cC&T~Ewq2yH-F]= bOJun)H-Y{u||~V~L[@V>L-`!');
define('NONCE_SALT',       'TqnMTpz.q*=x;fI@gk{f/u}mdv>%S5Ag(.Xw#HFwl:Kf1(I2n}#c-u|Qrw(pd[vU');

// ========================
// WordPress Table Prefix
// ========================
$table_prefix = 'staging_';


// ===============================
// Switch SITEURL & HOME Constants
// ===============================

define( 'RELOCATE', true);

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ================================
// Language
// Leave blank for American English
// ================================
define( 'WPLANG', '' );

// ===========
// Hide errors
// ===========
ini_set( 'display_errors', 0 );
define( 'WP_DEBUG_DISPLAY', false );

// =================================================================
// Debug mode
// Debugging? Enable these. Can also enable them in local-config.php
// =================================================================
// define( 'SAVEQUERIES', true );
// define( 'WP_DEBUG', true );

// ======================================
// Load a Memcached config if we have one
// ======================================
if ( file_exists( dirname( __FILE__ ) . '/memcached.php' ) )
	$memcached_servers = include( dirname( __FILE__ ) . '/memcached.php' );

// ===========================================================================================
// This can be used to programatically set the stage when deploying (e.g. production, staging)
// ===========================================================================================
define( 'WP_STAGE', '%%WP_STAGE%%' );
define( 'STAGING_DOMAIN', '%%WP_STAGING_DOMAIN%%' ); // Does magic in WP Stack to handle staging domain rewriting

// ===================
// Bootstrap WordPress
// ===================
if ( !defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/wp/' );
require_once( ABSPATH . 'wp-settings.php' );


//==================================
//Bypass FTP connection credentials:
//==================================
define('FS_METHOD','direct');

