<?php
require_once 'config.php';
require_once 'includes/Database.php';

/**
 * Include all files under Models folder
 */
foreach (glob("../app/Models/*.php") as $filename) {
  include $filename;
}
