<?php
require_once "../config.php";
require_once "../model/shoppingModel.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
} catch (Exception $e) {
    die($e->getMessage());
}   
var_dump($db); 

$allGoods = getAllGoods($db);

include "../view/mainView.php";