<?php
require_once "../config.php";
require_once "../model/shoppingModel.php";

try {
    $db = new PDO(DB_DRIVER . ":host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET . ";port=" . DB_PORT, DB_LOGIN, DB_PWD);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die($e->getMessage());
}   

$getCategories = getCategoriesForAdd($db);

if (isset($_POST["newCat"])) {
    $addCat = addNewCategory($db, $_POST["newCat"]);
}

if (isset($_GET["pg"])) {
    switch($_GET["pg"]) {
        case "open":
            $title = "Shop";
            include("../view/shopView.php");
            break;
        case "stock" :
            $title = "Stock Control";
            include("../view/stockView.php");
            break;
        case "finance" :
            $title = "Shop Finances";
            include("../view/bankView.php");
            break;
       case "home" :
            $title = "Welcome to the Shop";
            include("../view/mainView.php");
            break;            
            default : 
            $title = "Shop";
            include('../view/mainView.php');
    }
    }else {
        $title = "Shop";
        include('../view/mainView.php');
}