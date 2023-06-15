<?php 
include('templates/header.php');
include('validate_login.php');
include('navbars/user_nav.php');
?>
<div class="container-fluid">
    <div class="row dash-body">
        <?php include('navbars/side_bar.php');?>
        <div class="col-md-10">
            <div class="title-page">
                <h5 class="large-text"><i class="fa fa-tachometer"></i> Dashboard</h5>
            </div>
            <br>
            <div class="row">
                <div class="col-md-4">
                    <div class="summary-card">
                        <i class="fa fa-book summary-icon"></i>
                        <br><br>
                        <?php 
                            $sql = "SELECT * FROM subject where user_id='$user_id' ";
                            $res = mysqli_query($conn,$sql);
                            $sub = mysqli_num_rows($res);
                        ?>
                        <h5><b>Encoded Subjects: <?php echo $sub; ?></b></h5>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="summary-card">
                        <i class="fa fa-tasks summary-icon"></i>
                        <br><br>
                        <?php 
                            $sql = "SELECT * FROM activity where user_id='$user_id' ";
                            $res = mysqli_query($conn,$sql);
                            $act = mysqli_num_rows($res);
                        ?>
                        <h5><b>Encoded Tasks: <?php echo $act; ?></b></h5>
                    </div>   
                </div>

            </div>
        </div>
    </div>
</div>
<?php 
if(isset($_GET['logout'])){
    session_destroy();
    header('location:login.php');
}
include('templates/footer.php');
?>