<?php
// ===================================================
// Load database info and local development parameters
// ===================================================
if ( file_exists( dirname( __FILE__ ) . '/local-config.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/local-config.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', '%%DB_NAME%%' );
	define( 'DB_USER', '%%DB_USER%%' );
	define( 'DB_PASSWORD', '%%DB_PASSWORD%%' );
	define( 'DB_HOST', '%%DB_HOST%%' ); // Probably 'localhost'
}

// ========================
// Custom Content Directory
// ========================
define( 'WP_CONTENT_DIR', dirname( __FILE__ ) . '/content' );
define( 'WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/content' );

// ================================================
// You almost certainly do not want to change these
// ================================================
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// ==============================================================
// Salts, for security
// Grab these from: https://api.wordpress.org/secret-key/1.1/salt
// ==============================================================
define('AUTH_KEY',         '2!7Ro{N1V*C,UB+J?=rpyk3#x356K}_mK}eV85P%<?&t<J(Esh32l&-CbB2=zh6f');
define('SECURE_AUTH_KEY',  '@afs+0Kx>@QyB+BPZV#-f?x<&!{WXQBkxV^=uwG* Z{)4~VUP85+b*[.H{=qB:({');
define('LOGGED_IN_KEY',    'yASo+Y^x)|oVX&x0CdE;Xr+W[e=*EglZRgsO!p9o2#kW>a*,}~nN$. d:wUhuI@G');
define('NONCE_KEY',        'Dl-:k 7nZE[58B&u-4ktV;>:*|,6|VL2d3,nRxpenA.|oUG&Jg[6+CQsW6(TijS3');
define('AUTH_SALT',        ']|1&u]_rhw))6MEM+sf{k? y75.x#-Wgo&{_/9:n,CR3-g}y|;R^AD6_DNE++]!;');
define('SECURE_AUTH_SALT', 'wr+#QzCfg6.o%QoAkEUD.S,?+e}ij@x~mxmo-])RI.7|Lip-}8Nv3$#T7SqZh^AT');
define('LOGGED_IN_SALT',   'i45]sT%-9C<I7qH025JE@PfY#R|!9f_JZnw*mBn?)CiPVxY`Qb1I~<F$jM4j5j{C');
define('NONCE_SALT',       '|)X6E#|EDQYHkt^9Cui74G<b%wb)q5X~T_wLNLC86;$gn30`V{.LHx:e.]&#8-i:');


// ==============================================================
// Table prefix
// Change this if you have multiple installs in the same database
// ==============================================================
$table_prefix  = 'wp_';

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
