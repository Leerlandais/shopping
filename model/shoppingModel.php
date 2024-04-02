<?php

function addNewCategory(PDO $db, $newCategory, $slugCat) {
    $cleanedCat = htmlspecialchars(strip_tags(trim($newCategory)), ENT_QUOTES);
    $cleanedSlug = htmlspecialchars(strip_tags(trim($slugCat)), ENT_QUOTES);
    if (empty($cleanedCat) || empty($cleanedSlug)) {
        return false;
    }else {
        $sql = "INSERT INTO `category` (`cat_name`, `cat_slug`) VALUES (:catName, :catSlug)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':catName', $cleanedCat);
        $stmt->bindParam(':catSlug', $cleanedSlug);
 //       var_dump($sql);
   //     var_dump($stmt);
        try {
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo "Couldn't Insert Category";
            return false;
        }
    }
}

function addNewItem(PDO $db, $newItem, $slugItem, $itemCat) {
    $cleanedItem = htmlspecialchars(strip_tags(trim($newItem)), ENT_QUOTES);
    $cleanedSlug = htmlspecialchars(strip_tags(trim($slugItem)), ENT_QUOTES);
    $cleanedCat = htmlspecialchars(strip_tags(trim($itemCat)), ENT_QUOTES);
    if (empty($cleanedItem) || empty($cleanedSlug) || empty($cleanedCat)) {
        return false;
}else {
    $sql = "INSERT INTO `item` (`item_name`, `item_slug`) VALUES (:itemName, :itemSlug)";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':itemName', $cleanedItem);
    $stmt->bindParam(':itemSlug', $cleanedSlug);
    $sqlCat = "INSERT INTO `item_has_cat` (`cat_idcat`) VALUES (:idcat)";
    $stmtCat = $db->prepare($sqlCat);
    $stmtCat->bindParam(':idcat', $cleanedCat);

    try {
        $stmt->execute();
        $stmtCat->execute();
        return true;
    } catch (PDOException $e) {
        echo "Couldn't Insert Category";
        return false;
    }
}
}
function getCategoriesForAdd(PDO $db) {
    $sql = "SELECT * 
            FROM category
            ";
                try{
                    $query = $db->query($sql);
                    if($query->rowCount()==0){
                        return "No Categories Exist (Yet)";
                    }
                                $result = $query->fetchAll();
                    $query->closeCursor();
                    return $result;
            
                }catch(Exception $e){
                    return $e->getMessage();
                }
}

function getItemsForAdd(PDO $db) {
    $sql = "SELECT i.item_name, i.item_id, i.item_slug, h.cat_idcat, c.cat_name
            FROM item i
            JOIN item_has_cat h 
            ON h.item_iditem = i.item_id
            JOIN category c
            ON c.cat_id = h.cat_idcat
            ORDER BY i.item_name ASC
            ";
                try{
                    $query = $db->query($sql);
                    if($query->rowCount()==0){
                        return "No Items Exist (Yet)";
                    }
                                $result = $query->fetchAll();
                    $query->closeCursor();
                    return $result;
            
                }catch(Exception $e){
                    return $e->getMessage();
                }
}

function getItemsForPricing(PDO $db) {
    $sql = "SELECT i.item_name AS nom, p.price_cost AS buy, p.price_sell AS sell
            FROM item i
            LEFT JOIN price p
            ON i.item_id = p.price_iditem
            ORDER BY nom
    ";
                    try{
                        $query = $db->query($sql);
                        $result = $query->fetchAll();
                        $query->closeCursor();
                        return $result;
                
                    }catch(Exception $e){
                        return $e->getMessage();
                    }
}