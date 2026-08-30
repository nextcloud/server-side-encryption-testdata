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
  'instanceid' => 'oc0h50z5ilbu',
  'passwordsalt' => 'MkdgDkIlwPD+d36PSrKlL1mwF9h9Td',
  'secret' => 'IZv0hFlOBdbO9MEOcQMd6czty2bvU4SyMPDPphIxRDK8HFne',
  'trusted_domains' => 
  array (
    0 => 'macmini:8080',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'sqlite3',
  'version' => '32.0.0.13',
  'overwrite.cli.url' => 'http://macmini:8080',
  'installed' => true,
);
