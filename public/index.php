<?php
// Headers
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

require_once '../app/bootstrap.php';

// Sample usage to get all users from db
$user = new User;
$users = $user->all();

var_dump($users);
