<?php
$host = 'localhost';
$db = 'ath';  
$user = 'root'; 
$pass = ''; 

$conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);


$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(!$conn){
    echo "Connection failure";
}
?>
