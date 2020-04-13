<?php

/**
 * Local settings for GitHub Actions.
 */

$databases['default']['default'] = [
  'database' => 'drupal8',
  'username' => 'root',
  'password' => 'root',
  'prefix' => '',
  'host' => 'mysql',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
  //'unix_socket' => '/var/run/mysqld/mysqld.sock',
];

// Display errors.
$config['system.logging']['error_level'] = 'verbose';
