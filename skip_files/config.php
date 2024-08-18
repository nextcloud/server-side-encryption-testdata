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
  'instanceid' => 'oco0q04i4djv',
  'passwordsalt' => '7/K79VXtu1RwvpnTkvsbC7Wr6cVfwT',
  'secret' => 'kiYNlIetbTQwn328L/GCuo/FrCHFhvbkOr32IiCI88PRjtGm',
  'trusted_domains' => 
  array (
    0 => 'localhost:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '29.0.0.19',
  'overwrite.cli.url' => 'http://localhost:8080',
  'installed' => true,
);
