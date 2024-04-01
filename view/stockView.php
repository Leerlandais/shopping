<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title><?=$title?></title>
</head>
<body>
    <h6 id="screenwidth"></h6>
    <?php
   // var_dump($db);
    ?>
        <h1>Welcome To The Shop</h1>
    <div class="global">
    <h2>See Inventory, Order Items and Control Prices</h2>
    <?php include("inc/navMenu.php");
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
        }else if ($_GET["stockarea"] === "control") {
            ?>
            <div class="stockBack">
            <a href="?pg=stock" class="stockLink">Retour</a>
                <h3>Would you like to...</h3>
                <ul>
                    <a href="?pg=stock&stockarea=control&addNew=cat"><h3 class="addItemCat">...add a new Category</h3></a>
                    <a href="?pg=stock&stockarea=control&addNew=item"><h3 class="addItemCat">...add a new Item</h3></a>
                </ul>
        </div>
            <?php 
        }
        ?>
     
    </div> <!-- end of global -->
    <script src="scripts/script.js"></script>
</body>
</html>