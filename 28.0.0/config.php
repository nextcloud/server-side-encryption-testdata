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
  'instanceid' => 'oc8qzi8ijyoz',
  'passwordsalt' => 'Tassjru1fLe2psCdLYbrTFpARVC+fr',
  'secret' => 'xwyBF/7MXFxdpB5xls4PJai1V9SB8j1m7lGOF2hJn3tUaClx',
  'trusted_domains' => 
  array (
    0 => 'macmini:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '28.0.0.11',
  'overwrite.cli.url' => 'http://macmini:8080',
  'installed' => true,
);
