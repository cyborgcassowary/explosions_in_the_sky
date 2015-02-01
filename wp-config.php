<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'flare');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '96M');

define('AUTH_KEY',         'bt+.RvT6lbz_l$iyIPl`D#K;zJZZK,T9]hz6nJdNP-F#S%-6eo oSWtB7 J9)S=-');
define('SECURE_AUTH_KEY',  'Ye$sf_#ZXc?-.kEU#3M^_X:qXq#?4C5r+|.pw.Sr1VyT[ OL(*uGu(kY8@`HQ&;h');
define('LOGGED_IN_KEY',    'W@m-}%a~^NAhL0l*EJ,y}6^NJ<wZ>irr`J~`-JRZ@g(=A/W~_Z~J>|rKw$#;$]f8');
define('NONCE_KEY',        ')eQ7}0)3A$?}8rszCOIE|atAvzhik4[I+(]%tAAS3NUu<#-msx{f>D^G>ZT].7:~');
define('AUTH_SALT',        'YHzb<2G m1q:jM33yO>1*{/ZG*NQejj5fqfVq_tn*OHi0_BD-=>+fcB+L3S [;[N');
define('SECURE_AUTH_SALT', 'ydg}d%y)l2<H)gax8kH{)Xr,fQ1j5NhlXQa0J[LL5po|brR_aZ[&0C=OfDs3qySQ');
define('LOGGED_IN_SALT',   '4O|v|DLM:hM~KewZccMeOQl~UDaH@CQap(W$w^M@.MZA@@8O8AC$$czXZ5pic`W{');
define('NONCE_SALT',       '{925x2K?{x0Onqh?i+-hYG=qn|.Osj.HeJ_c|=|U*/3rV?#<t(_h-@$E1o>jhe]}');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
