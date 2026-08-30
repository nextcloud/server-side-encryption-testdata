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
  'instanceid' => 'ocjci1hnonwe',
  'passwordsalt' => '+rBpSwxqMQOruFxBOYKiZNAQQyRinR',
  'secret' => 'b4lZfh0aa7FZEktZfDVLS1LH8ldfkUjkBPmRkOw2EwzDBk8H',
  'trusted_domains' => 
  array (
    0 => 'macmini:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '33.0.6.2',
  'overwrite.cli.url' => 'http://macmini:8080',
  'installed' => true,
);
