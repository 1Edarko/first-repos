<?php

ini_set('display_errors' , 'On');
define('APP_ROOT' , __DIR__);
define('VIEW_ROOT' , APP_ROOT .'\views');
define('BASE_URL' , 'http://localhost/App');
$db = new PDO('mysql:host=localhost;dbname=app', 'root', '');

// echo VIEW_ROOT;
// echo APP_ROOT;
require 'functions.php';






?>