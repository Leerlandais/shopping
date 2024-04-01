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
            include("inc/stockMain.php");
            if (isset($_GET["addnew"])) {
                switch($_GET["addnew"]) {
                    case "cat" :
                        include("inc/stockAddCat.php");
                        break;
                    case "item" :
                        include("inc/stockAddItem.php");
                        break;
                }
            }
        ?>
     
    </div> <!-- end of global -->
    <script src="scripts/script.js"></script>
</body>
</html>