<fieldset class="addNewCatItem">
    <legend>Add New Category</legend>
    <form action="?pg=stock&stockarea=control&addnew=cat" method="POST">
        <label for="newCat">Add Category : </label>
        <input type="text" name="newCat" id="newCat" placeholder="Category Name">
        <input type="text" name="catSlug" id="catSlug" >
        <button type="submit">Add Category</button>
    </form>
    <h4>Link cats to items etc</h4>
        <h4>Existing Categories &lpar;click to add items&rpar;</h4>
        <ul class="stockBack">
            <?php 
            if (isset($getCategories) && is_array($getCategories)) {
            foreach ($getCategories as $gc) : ?>
           <a href="?pg=stock&stockarea=control&addnew=item&cat=<?=$gc["cat_id"]?>"><li><?=$gc["cat_name"]?></li></a> 
            <?php
            endforeach;
        }else {
            echo 'no categories, yet';
        }
            ?>
        </ul>
</fieldset>