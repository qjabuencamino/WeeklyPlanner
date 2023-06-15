<?php 
ob_start();
session_start();
if(isset($_POST['week']) && isset($_POST['subject'])) {
    include('db/connection.php');
    include('validate_login.php');
    $_SESSION['week'] = $_POST['week'];
    $_SESSION['subject'] = $_POST['subject'];
}
?>