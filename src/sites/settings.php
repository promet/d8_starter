<?php

// @codingStandardsIgnoreFile

// Dev settings.
if (getenv('SITE_ENVIRONMENT') == 'local' && !getenv('SITE_ENVIRONMENT')) {
  include $app_root . '/sites/settings.local.php';
}
// Drupal settings.
if (file_exists($app_root . '/sites/settings.promet.php')) {
  include $app_root . '/sites/settings.promet.php';
}
$settings['install_profile'] = 'minimal';

// Automatically generated include for settings managed by ddev.
if (file_exists($app_root . '/' . $site_path . '/settings.ddev.php') && getenv('IS_DDEV_PROJECT') == 'true') {
  include $app_root . '/' . $site_path . '/settings.ddev.php';
}
