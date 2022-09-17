<?php
$admin_theme = [
    "dir" => "default_admin/blue",
    "template" => "admin.php",
];

$themes['admin'] = $admin_theme;

// Simplix Theme
$simplix_theme = [
  "dir" => "simplix/",
  "template" => "_blank.php"
];

$themes['simplix'] = $simplix_theme;


define('THEMES', $themes);