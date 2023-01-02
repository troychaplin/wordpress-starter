<?php
# Environment
define('ENV', $_ENV['ENV']);

# URLS
define('WP_HOME', $_ENV['WP_HOME']);
define('WP_SITEURL', $_ENV['WP_SITEURL']);

# Database
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_CHARSET', $_ENV['DB_CHARSET']);
define('DB_COLLATE', $_ENV['DB_COLLATE']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASSWORD']);
define('DB_HOST', $_ENV['DB_HOST']);

# Debug (See debug.log in wp-content)
define('WP_DEBUG', $_ENV['WP_DEBUG']);
if (WP_DEBUG) {
    define('WP_DEBUG_LOG', false);
    define('WP_DEBUG_DISPLAY', false);
}

# Redis
define('WP_CACHE', $_ENV['WP_CACHE']);
define('WP_REDIS_DISABLED', $_ENV['WP_REDIS_DISABLED']);
define('WP_REDIS_HOST', $_ENV['WP_REDIS_HOST']);
define('WP_REDIS_PORT', $_ENV['WP_REDIS_PORT']);
define('WP_REDIS_TIMEOUT', $_ENV['WP_REDIS_TIMEOUT']);
define('WP_REDIS_READ_TIMEOUT', $_ENV['WP_REDIS_READ_TIMEOUT']);
define('WP_REDIS_DATABASE', $_ENV['WP_REDIS_DATABASE']);
define('WP_REDIS_PREFIX', $_ENV['WP_REDIS_PREFIX']);
define('WP_REDIS_MAXTTL', $_ENV['WP_REDIS_MAXTTL']);
define('WP_REDIS_CLIENT', $_ENV['WP_REDIS_CLIENT']);

if (ENV !== 'local') {
    define('WP_REDIS_SENTINEL', $_ENV['WP_REDIS_SENTINEL']);
    define('WP_REDIS_SERVERS', [
            $_ENV['WP_REDIS_SENTINEL_1'],
            $_ENV['WP_REDIS_SENTINEL_2'],
            $_ENV['WP_REDIS_SENTINEL_3'],
        ]);
}

# Admin
define('AUTOMATIC_UPDATER_DISABLED', $_ENV['AUTOMATIC_UPDATER_DISABLED']);
define('AUTOSAVE_INTERVAL', $_ENV['AUTOSAVE_INTERVAL']);
define('DISALLOW_FILE_EDIT', $_ENV['DISALLOW_FILE_EDIT']);
define('DISALLOW_FILE_MODS', $_ENV['DISALLOW_FILE_MODS']);
define('EMPTY_TRASH_DAYS', $_ENV['EMPTY_TRASH_DAYS']);
define('FORCE_SSL_ADMIN', $_ENV['FORCE_SSL_ADMIN']);
define('FORCE_SSL_LOGIN', $_ENV['FORCE_SSL_LOGIN']);
define('MEDIA_TRASH', $_ENV['MEDIA_TRASH']);
define('WP_DEFAULT_THEME', $_ENV['WP_DEFAULT_THEME']);
define('WP_POST_REVISIONS', $_ENV['WP_POST_REVISIONS']);

# Cookies
define('ADMIN_COOKIE_PATH', $_ENV['ADMIN_COOKIE_PATH']);
define('COOKIE_DOMAIN', $_ENV['COOKIE_DOMAIN']);
define('COOKIEPATH', $_ENV['COOKIEPATH']);
define('SITECOOKIEPATH', $_ENV['SITECOOKIEPATH']);

/* Salts */
define('AUTH_KEY', 'z2`S!n-Wnj3Z1P |(fGIE;UZz$rXj`2mQ>[OEqRc}?I~UrzOar|v5M+%VjFt{%Xy');
define('SECURE_AUTH_KEY', '??K|<UNvT}q{?*nxgZ%$<<>*wX- +D|O(+=YBT2mz~G oWX_!A|Q>TY@E=mBdUCf');
define('LOGGED_IN_KEY', '.tQh7_STl&nGI8Q&?.lMv:>G8BC8|&#F@saH}C7{=>vn;49kJ5r~x( -BVx_iB%G');
define('NONCE_KEY', 'J]1.>r;,fykY&gp@^,8-ND4$eDz`#M{1/kr+5I4-V])+)[.7w8Unc~.`/AUEo;10');
define('AUTH_SALT', 'i1{^n!C.4F-H5|hU|5v,pc^60vhPdDi/*US%Srk)q^F90ll>#EdU;D8jS>2Ynvq:');
define('SECURE_AUTH_SALT', '(VKxOGx.9e*tAgeXuEMu 0Dl>-Gr .cu+nu-Y_r;LRF!7,)~1P)vb]6U-e)Z@aK_');
define('LOGGED_IN_SALT', 'pM$RIy0][!e>{&Gg+0g[v{7gk)^mXguNcYq;np)_f0=;98y-B^ym(0H-zD;Efagc');
define('NONCE_SALT', 'V+tXX5[vQshv+=3hRWX@qNIf2)+1DOq&A1,c#5&H=FO:^A|:3J9I-DQ6FT_2-qo/');
    

# Table Prefix
$table_prefix = 'wp_';

# Allow WordPress through proxy
if (isset($_ENV['HTTP_X_FORWARDED_HOST'])) {
    $_ENV['HTTP_HOST'] = $_ENV['HTTP_X_FORWARDED_HOST'];
}

# Allow WordPress to detect HTTPS when used behind a reverse proxy or a load balancer
if (isset($_ENV['HTTP_X_FORWARDED_PROTO']) && $_ENV['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_ENV['HTTPS'] = 'on';
}

# Absolute path to the WordPress directory.
if (! defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

# Sets up WordPress vars and included files
require_once ABSPATH . 'wp-settings.php';
