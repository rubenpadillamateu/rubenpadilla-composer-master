<?php 
require_once 'vendor/autoload.php';
include 'DBconn.php';
/*
$servername = "localhost";
$username = "root";
//$password = "password";
$dbname = "icb0006_uf4_pr01";

// Create connection
$conn = new mysqli($servername, $username, '', $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}*/

$faker = Faker\Factory::create();
$conexion = new DBconn();
$sql;
$date;
$company;
$qty;

$conn = $conexion->connect();
/*for ($i = 0; $i < 1000; $i++){
    $date = $faker->dateTimeBetween('-30 years', '+0 days')->format('Y-m-d') . "\n";
    $company =  $faker->company;
    $company = str_replace("'", " ", $company);
    $qty = $faker->numberBetween($min = 0, $max = 1000). "<br>";
    //$sql = "INSERT INTO orders (date, company, qty)
    //VALUES ('".$date."', '".$company."', '".$qty."')";   
    echo $conexion->insertData($date, $company, $qty, $conn);
    
    }*/

    

    //$conn->close();


?>
<a href="apiOrders.php">API Fake Results</a>