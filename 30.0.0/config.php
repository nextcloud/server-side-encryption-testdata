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
  'instanceid' => 'ocdg3nll78ws',
  'passwordsalt' => '9glAnhuwDKU4qqaP34RNqNiWC2nKSu',
  'secret' => 'uzF4QV35Cseak4zt3bzEbRV3suOpkc/MV3GZFV2WUH9U/xbu',
  'trusted_domains' => 
  array (
    0 => 'macmini:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '30.0.0.14',
  'overwrite.cli.url' => 'http://macmini:8080',
  'installed' => true,
);
