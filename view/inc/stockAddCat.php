<fieldset class="addNewCatItem">
    <legend>Add New Category</legend>
    <form action="" method="POST">
        <label for="newCat">Add Category : </label>
        <input type="text" name="newCat" id="newCat" placeholder="Category Name">
        <button type="submit">Add Category</button>
    </form>
    <h3>ADD SLUG MAKER TO CAT NAME!!!</h3>
    <h4>Link cats to items etc</h4>
        <h4>Existing Categories</h4>
        <ul class="stockBack">
            <?php 
            if (isset($getCategories) && is_array($getCategories)) {
            foreach ($getCategories as $gc) : ?>
            <li><?=$gc["cat_name"]?></li>
            <?php
            endforeach;
        }else {
            echo 'no categories, yet';
        }
            ?>
        </ul>
</fieldset>