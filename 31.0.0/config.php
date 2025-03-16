<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'upgrade.disable-web' => true,
  'instanceid' => 'ocmphv6n7mfc',
  'passwordsalt' => 'Y0aHDShowJ3+5+vS5ZOw/bp7BjkLhc',
  'secret' => 'xTnQZceVgHneA8OQ7nUcoCLioKkQiElsmzFZOBTv6tNW1WDp',
  'trusted_domains' => 
  array (
    0 => 'macmini:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '31.0.0.18',
  'overwrite.cli.url' => 'http://macmini:8080',
  'installed' => true,
);
