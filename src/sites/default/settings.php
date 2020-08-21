<?php

// @codingStandardsIgnoreFile

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

// Local option.
if (getenv('SITE_ENVIRONMENT') == 'local' && !getenv('SITE_ENVIRONMENT') && file_exists($app_root . '/' . $site_path . '/settings.local.php')) {
  include $app_root . '/sites/default/settings.local.php';
}
