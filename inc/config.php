<?php
session_start();

//include the user class, pass in the database connection
include __DIR__ . '/../classes/Collection.php';
include __DIR__ . '/../classes/ListingBasic.php';
include __DIR__ . '/../classes/ListingPremium.php';
include __DIR__ . '/../classes/ListingInactive.php';
include __DIR__ . '/../classes/ListingFeatured.php';

//connect to the database
try {
    //create PDO connection
    $db = new PDO("sqlite:".__DIR__."/database.db");
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}
//create directory object passing in the connection to our collection class
//load main collection object
$directory = new Collection($db);