<?php if(!isset($_GET["pg"])) { ?>
<nav>
    <ul class="navUL">
        <a href="?pg=open" class="navLink"><li>Open the Shop</li></a>
        <a href="?pg=stock" class="navLink"><li>Control Stock</li></a>
        <a href="?pg=finance" class="navLink"><li>Finances</li></a>      
    </ul>
</nav>

<?php }else if ($_GET["pg"] === "open") { ?>
    <nav>
    <ul class="navUL">
        <a href="?pg=home" class="navLink"><li>Home</li></a>
        <a href="?pg=stock" class="navLink"><li>Control Stock</li></a>
        <a href="?pg=finance" class="navLink"><li>Finances</li></a>      
    </ul>
</nav>  
<?php
}else if ($_GET["pg"] === "stock") { ?>
    <nav>
    <ul class="navUL">
        <a href="?pg=open" class="navLink"><li>Open the Shop</li></a>
        <a href="?pg=home" class="navLink"><li>Home</li></a>
        <a href="?pg=finance" class="navLink"><li>Finances</li></a>      
    </ul>
</nav>
<?php
}else if ($_GET["pg"] === "finance") { ?>
<nav>
    <ul class="navUL">
        <a href="?pg=open" class="navLink"><li>Open the Shop</li></a>
        <a href="?pg=stock" class="navLink"><li>Control Stock</li></a>
        <a href="?pg=home" class="navLink"><li>Home</li></a>      
    </ul>
</nav>
    <?php
}else { ?>
    <nav>
        <ul class="navUL">
            <a href="?pg=open" class="navLink"><li>Open the Shop</li></a>
            <a href="?pg=stock" class="navLink"><li>Control Stock</li></a>
            <a href="?pg=finance" class="navLink"><li>Finances</li></a>      
        </ul>
    </nav>
        <?php
    }