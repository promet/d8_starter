<?php

// @codingStandardsIgnoreFile

// Dev settings.
if (getenv('SITE_ENVIRONMENT') == 'local' && !getenv('SITE_ENVIRONMENT')) {
  include $app_root . '/sites/default/settings.local.php';
}
// Drupal settings.
if (file_exists($app_root . '/sites/default/settings.promet.php')) {
  include $app_root . '/sites/default/settings.promet.php';
}
$settings['install_profile'] = 'minimal';

// Automatically generated include for settings managed by ddev.
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';
}

// Automatically generated include for settings managed by docksal.
if (file_exists($app_root . '/' . $site_path . '/settings.docksal.php') && getenv('IS_DOCKSAL_PROJECT') == TRUE) {
  include $app_root . '/' . $site_path . '/settings.docksal.php';
}
$databases['default']['default'] = array (
  'database' => 'default',
  'username' => 'user',
  'password' => 'user',
  'prefix' => '',
  'host' => 'db',
  'port' => '3306',
  'namespace' => 'Drupal\\Core\\Database\\Driver\\mysql',
  'driver' => 'mysql',
);
$settings['hash_salt'] = 'sfHaxdHt2z0inD0buAvvT0NDx8kG7KehhR8uEn1QcqKpI4o4pWkOuH-Eg3XbHcf1kLgXNe7yDw';
