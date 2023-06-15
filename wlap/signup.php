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
                    <h3>Create and account to continue.</h3>
                </div>
                <br>
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

                        <p class="small-text login-field">
                            First name
                            <input type="text" class="form-control" name="first_name" placeholder="enter first name" required>
                        </p>

                        <p class="small-text login-field">
                            Middle name
                            <input type="text" class="form-control" name="middle_name" placeholder="enter last name" required>
                        </p>

                        <p class="small-text login-field">
                            Last name
                            <input type="text" class="form-control" name="last_name" placeholder="enter last name" required>
                        </p>
                        <button type="submit" name="submit" class="btn btn-success form-control">Create an account</button>
                    </form>
                    <br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $fname = $_POST['first_name'];
    $mname = $_POST['middle_name'];
    $lname = $_POST['last_name'];

    $sql = "INSERT INTO user_table (email,password,first_name,last_name,middle_name) VALUES ('$email','$pass','$fname','$lname','$mname')";
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION['create_success'] = true;
        header('location:login.php');
    }

}
include('templates/footer.php');
?>