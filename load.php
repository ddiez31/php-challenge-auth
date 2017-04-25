<?php

require_once 'vendor/j4mie/idiorm/idiorm.php';

session_start();

$user = 'root';
$pass = '070401';

ORM::configure(array(
    'connection_string' => 'mysql:host=localhost;dbname=reunion_island',
    'username' => $user,
    'password' => $pass
));
ORM::configure('return_result_sets', true);
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
ORM::configure('error_mode', PDO::ERRMODE_WARNING);

$users = ORM::for_table('user')->find_many();


?>