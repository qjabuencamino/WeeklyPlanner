<?php 
    if(isset($_SESSION['login_success'])){
        $user_id = $_SESSION['user_id'];
        $sql = "SELECT * FROM user_table where user_id = '$user_id' ";
        $res = mysqli_query($conn,$sql);
        $user = mysqli_fetch_assoc($res);
        $user_id = $user['user_id'];
    }
    else{
        header('location:login.php');
    }
?>