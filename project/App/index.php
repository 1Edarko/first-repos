<?php

require 'init.php';
$pages= $db->query("
SELECT id , slug , label FROM pages


"
)->fetchAll(PDO::FETCH_ASSOC);
// print_r($pages);
require VIEW_ROOT . '/home.php';



?>