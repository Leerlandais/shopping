<?php


if (isset($_GET["cat"])) { 
?>
    <fieldset class="addNewCatItem">
        <legend>Add New Item to Category</legend>
        <form action="?pg=stock&stockarea=control&addnew=item&cat=<?=$_GET["cat"]?>" method="POST">
            <label for="newItem">Add Item : </label>
            <input type="text" name="newItem" id="newItem" placeholder="Item Name">
            <input type="text" name="itemSlug" id="catSlug" style="display: none;">
<?php
    $i=0;
    
foreach($getItems as $gi) {
    if ($gi["cat_idcat"] == $_GET["cat"] && $i < 1) {
$i++;
        ?>
        <input type="text" name="itemCat" id="itemCat" style="display: none;" value="<?=$gi["cat_idcat"]?>">
        <?php
}
}

?>
<button type="submit">Add Item</button>
</form>
<ul class="stockBack">
    <h4>Existing Items in Category : <?=$gi["cat_name"]?></h4>
    <?php
foreach($getItems as $gI) { 
    ?>
        <li><?=$gI["item_name"]?></li>
    <?php   
    }
}
?>
</ul>
</fieldset>