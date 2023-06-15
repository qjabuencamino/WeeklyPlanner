<?php 
include('templates/header.php');
include('navbars/landing_nav.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="card">
                <div class="bar bg-success"></div>
                <br><br>
                <div class="text-center">
                    <h3>Welcome back, Teacher!</h3>
                </div>
                <br><br>
                <div class="login-form">
                    <form method="POST">
                        <p class="small-text login-field">
                            Email
                            <input type="email" class="form-control" name="email" placeholder="enter email" required>
                        </p>
                        <p class="small-text login-field">
                            Password
                            <input type="password" class="form-control" name="password" placeholder="enter password" required>
                        </p>
                        <button type="submit" name="submit" class="btn btn-success form-control">Login</button> 
                    </form>
                    <br>
                        <p class="normal-text">Dont have an account? <a href="signup.php">Sign up here</a></p>
                    <div>
                        <?php 
                            if(isset($_SESSION['login_error'])){
                                echo'<div class="alert alert-warning text-center">
                                        Invalid credentials!
                                    </div>';
                                unset($_SESSION['login_error']);
                            }
                            
                            if(isset($_SESSION['create_success'])){
                                echo'<div class="alert alert-success">
                                        Account created successfully, please login to continue.
                                    </div>';
                                unset($_SESSION['create_success']); 
                            }
                        ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM user_table WHERE email = '$email' AND password = '$pass'";
    $res = mysqli_query($conn,$sql);

    if(mysqli_num_rows($res) == 1){
        $user = mysqli_fetch_assoc($res);
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['login_success'] = true;
        header('location:dashboard.php');
    }
    else{
        $_SESSION['login_error'] = true;
        header('location:login.php');
    }
}

include('templates/footer.php');
?>