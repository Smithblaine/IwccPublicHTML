<?php
require('../model/database.php');
require('../model/student_db.php');
require('../model/courses_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'list_products';
    }
}  

if ($action == 'list_products') {
    $courseID = filter_input(INPUT_GET, 'courseId',
            FILTER_VALIDATE_INT);
    if ($courseID == NULL || $courseID == FALSE) {
        $courseID = 1;
    }
    $courses = get_courses();
    $category_name = get_category_name($courseID);
    $products = get_products_by_category($courseID);
    include('product_list.php');
} else if ($action == 'view_product') {
    $student_id = filter_input(INPUT_GET, 'studentId',
            FILTER_VALIDATE_INT);   
    if ($student_id == NULL || $student_id == FALSE) {
        $error = 'Missing or incorrect product id.';
        include('../errors/error.php');
    } else {
        $courses = get_courses();
        $product = get_product($student_id);

        // Get product data
        $code = $product['productCode'];
        $name = $product['productName'];
        $list_price = $product['listPrice'];

        // Calculate discounts
        $discount_percent = 30;  // 30% off for all web orders
        $discount_amount = round($list_price * ($discount_percent/100.0), 2);
        $unit_price = $list_price - $discount_amount;

        // Format the calculations
        $discount_amount_f = number_format($discount_amount, 2);
        $unit_price_f = number_format($unit_price, 2);

        // Get image URL and alternate text
        $image_filename = '../images/' . $code . '.png';
        $image_alt = 'Image: ' . $code . '.png';

        include('product_view.php');
    }
}
?>