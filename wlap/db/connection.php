<?php 
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'wlap_db';

$conn = mysqli_connect($host,$user,$pass,$db);

if(!$conn){
    die('cant connect to the database');
}

?>