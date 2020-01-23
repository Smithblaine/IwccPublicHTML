<?php
require('../model/database.php');
require('../model/customers_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'customer_manager';
    }
}

if ($action == 'customer_manager') {
    $customers = get_all_customers();
    include('dummy_page.php');
}
else if ($action == 'search_last'){
    $customer = filter_input(INPUT_POST, 'lastName');
    $customers = search_by_last($customer);
    include('customer_list.php');
}
else if($action == 'selected_user'){
    $firstname = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $email = filter_input(INPUT_POST, 'email');
    $customers = grab_all_user_info($firstname, $lastName,$email);
    $countCodes = get_user_country_code();
    include('update_customer.php');
}
else if($action == 'searchList'){
    include('dummy_page.php');
}
else if($action == 'selected_update'){
    $customerID = filter_input(INPUT_POST, 'customerID');
    $firstName = filter_input(INPUT_POST, 'firstName');
    $lastName = filter_input(INPUT_POST, 'lastName');
    $address = filter_input(INPUT_POST, 'address');
    $city = filter_input(INPUT_POST, 'city');
    $state = filter_input(INPUT_POST, 'state');
    $postalCode = filter_input(INPUT_POST, 'postalCode');
    $countryCode = filter_input(INPUT_POST, 'countryCode');
    $phone = filter_input(INPUT_POST, 'phone');
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    update_selected_user($customerID, $firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password);
    include('update_customer.php');
    header("Location: .?action=search_last");
}
?>

