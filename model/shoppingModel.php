<?php

function getAllGoods(PDO $db) {
$sql = "SELECT * FROM main m
        JOIN main_has_stuff mhs 
        ON mhs.main_id = m.id
        JOIN category c 
        ON mhs.category_id = c.cat_id";

try{
    $query = $db->query($sql);
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $query->closeCursor();
    return $result;
    
}catch(Exception $e){
    return $e->getMessage();
}
}