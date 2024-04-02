<?php 
    if($_GET["pg"] === "stock" && !isset($_GET["stockarea"])) {
        ?>
        <ul class="stockUL">
            <a href="?pg=stock&stockarea=inv" class="stockLink"><li>See Inventory</li></a>
            <a href="?pg=stock&stockarea=order" class="stockLink"><li>Order Items</li></a>
            <a href="?pg=stock&stockarea=pricing" class="stockLink"><li>Set Prices</li></a>
            <a href="?pg=stock&stockarea=control" class="stockLink"><li>Add New Items</li></a>
        </ul>
        <?php }else if ($_GET["stockarea"] === "inv") {
            ?>
            <div class="stockBack">
            <a href="?pg=stock" class="stockLink">Retour</a>
            <h3>Inventory View Here</h3>
        </div>
        <?php
        }else if ($_GET["stockarea"] === "order") {
            ?>
            <div class="stockBack">
            <a href="?pg=stock" class="stockLink">Retour</a>
            <h3>Order Items Here</h3>
        </div>
            <?php
        }else if ($_GET["stockarea"] === "pricing") {
            ?>
            <div class="stockBack">
            <a href="?pg=stock" class="stockLink">Retour</a>
            <h3>Set Prices</h3>
        </div>
            <?php 
        }else if ($_GET["stockarea"] === "control" && !isset($_GET["addnew"])) {
            ?>
            <div class="stockBack">
            <a href="?pg=stock" class="stockLink">Retour</a>
                <h3>Would you like to...</h3>
                <ul>
                    <a href="?pg=stock&stockarea=control&addnew=cat"><h3 class="addItemCat">...add a new Category</h3></a>
                    <a href="?pg=stock&stockarea=control&addnew=item"><h3 class="addItemCat">...add a new Item</h3></a>
                </ul>
        </div>
            <?php 
        }