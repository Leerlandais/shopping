<?php

function addNewCategory(PDO $db, $newCategory) {
    $cleanedCat = htmlspecialchars(strip_tags(trim($newCategory)), ENT_QUOTES);
    if (empty($cleanedCat)) {
        return false;
    }else {
        $sql = "INSERT INTO `category` (`cat_name`) VALUES (:catName)";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':catName', $cleanedCat);
        try {
            $stmt->execute();
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
