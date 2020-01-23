<?php
/**
 * Created by IntelliJ IDEA.
 * User: ringo
 * Date: 12/4/2018
 * Time: 10:20 PM
 */

function get_all_customers(){
    global $db;
    $query = 'SELECT firstName, lastName, email, city FROM customers';
    $statement = $db->prepare($query);
    $statement->execute();
    $customers = $statement->fetchAll();
    $statement->closeCursor();
    return $customers;
}
function search_by_last($lastName){
    global $db;
    $query = 'SELECT * FROM customers 
              WHERE lastName = :last_name';
    $statement = $db->prepare($query);
    $statement->bindValue(':last_name', $lastName);
    $statement->execute();
    $lastSearch = $statement->fetchAll();
    $statement->closeCursor();
    return $lastSearch;
}

function get_user_country_code(){
    global $db;
    $query = 'SELECT * FROM countries';
    $statement = $db->prepare($query);
    $statement->execute();
    $countryCode = $statement->fetchAll();
    $statement->closeCursor();
    return $countryCode;
}

function grab_all_user_info($firstName,$lastName, $email){
    global $db;
    $query = 'SELECT cust.customerID, cust.firstName, cust.lastName, cust.address, 
	          cust.city, cust.state, cust.postalCode, countries.countryCode,  countries.countryName, cust.phone, cust.email, cust.password
              FROM customers cust
              LEFT OUTER JOIN countries ON countries.countryCode = cust.countryCode
              WHERE firstName = :first_name 
              AND lastName = :last_name
              AND email = :email';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $firstName);
    $statement->bindValue(':last_name', $lastName);
    $statement->bindValue(':email', $email);
    $statement->execute();
    $userInfo = $statement->fetchAll();
    $statement->closeCursor();
    return $userInfo;
}

function update_selected_user($customerID, $firstName, $lastName, $address, $city, $state, $postalCode, $countryCode, $phone, $email, $password){
    global $db;
    $query = 'UPDATE customers
              SET firstName = :first_name, 
                  lastName = :last_name, 
                  address= :address, 
                  city= :city, 
                  state= :state, 
                  postalCode= :postal_code,
                  countryCode= :country_code, 
                  phone= :phone, 
                  email= :email, 
                  password= :password
              WHERE customerID = :customer_id';
    $statement = $db->prepare($query);
    $statement->bindValue(':first_name', $firstName);
    $statement->bindValue(':last_name', $lastName);
    $statement->bindValue(':address', $address);
    $statement->bindValue(':city', $city);
    $statement->bindValue(':state', $state);
    $statement->bindValue(':postal_code', $postalCode);
    $statement->bindValue(':country_code', $countryCode);
    $statement->bindValue(':phone', $phone);
    $statement->bindValue(':email', $email);
    $statement->bindValue(':password', $password);
    $statement->bindValue(':customer_id', $customerID);
    $statement->execute();
}
?>