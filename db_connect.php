<?php
//$servername = "localhost:3306";
//$username = "wmm";
//$password = "Hamrorc4";
//$dbname = "wmm_dtmad";

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "Inventario";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>