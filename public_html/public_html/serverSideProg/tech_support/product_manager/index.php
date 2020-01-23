<?php
require('../model/database.php');
require('../model/products_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'product_manager';
    }
}

if($action == 'product_manager'){
    $products = get_all_products();
    include('product_list.php');
}
else if ($action == 'add_product'){
    include('product_add.php');

}
else if ($action == 'product_list'){
    $products = get_all_products();
    include('product_list.php');
}
else if($action == 'add_products'){
    $productCode = filter_input(INPUT_POST, 'productCode');
    $name = filter_input(INPUT_POST, 'name');
    $version = filter_input(INPUT_POST, 'version');
    $releaseDate = filter_input(INPUT_POST, 'releaseDate');

     if ($productCode == NULL || $name == NULL || $version == NULL || $releaseDate == NULL) {
         $error = "Invalid product data. Check all fields and try again.";
         include('../errors/error.php');
     }
     else {
    add_product($productCode, $name, $version, $releaseDate);
    header("Location: .?action=add_product");
    }
}
else if($action =='delete_product'){
    $productCode = filter_input(INPUT_POST, 'productCode');
    delete_product($productCode);
    $products = get_all_products();
    include('product_list.php');
}

?>