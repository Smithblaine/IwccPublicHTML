<?php include '../view/header.php'; ?>
<main>
    <h1>Add product</h1>
    <form action="index.php" method="post" id="add_product_form">
        <input type="hidden" name="action" value="add_products">
        <br>
        <div id="align">
            <div id="alignRight">
                <label>Code:</label>
                <input type="text" name="productCode" />
                <br>
                <label>Name:</label>
                <input type="text" name="name" />
                <br>
                <label>Version:</label>
                <input type="text" name="version" />
                <br>
                <label>Release Date:</label>
                <input type="text" name="releaseDate" value="<?php date('Y d M'); ?>" placeholder="Use any valid date format "/>
                <br>
                <label>&nbsp;</label>
                <input type="submit" value="Add_product" />
                <br>
            </div>
        </div>
    </form>
    <br>
    <p class="last_paragraph">
        <a href="index.php?action=product_list">View Product List</a>
    </p>
</main>
<?php include '../view/footer.php'; ?>