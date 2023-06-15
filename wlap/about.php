<?php 
include('templates/header.php');
include('navbars/landing_nav.php');
?>
<div class="container">


    <div class="row">
        <div class="col-md-6">
            <img src="images/homepage.png" class="homepage-image">
        </div>
        <div class="col-md-4 about-container">
            <div>
                <h4><b>Get to know us!</b></h4>
                <p class="normal-text">We are Computer Engineering students who developed a weekly planner mainly for teachers.</p>
                <a href="login.php"><button class="btn btn-success login-btn"><i class="fa fa-lock"></i> Login Here</button></a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="text-center">
            <h2><b>Developers</b></h2>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 cont">
            <div class="detail-card shadows">
                <img src="images/dev1.jpg" class="dev-img">
                <br><br>
                <p class="normal-text"><b><i class="fa fa-user text-primary"></i> Ezekiel Manuel</b></p>
                <p class="normal-text"><b><i class="fa fa-envelope text-warning"></i></b></p>
            </div>
        </div>
        <div class="col-md-4 cont">
            <div class="detail-card shadows">
                <img src="images/dev2.jpg" class="dev-img">
                <br><br>
                <p class="normal-text"><b><i class="fa fa-user text-primary"></i> Jerome Vasquez</b> </p>
                <p class="normal-text"><b><i class="fa fa-envelope text-warning"></i></b></p>
            </div>
        </div>
        <div class="col-md-4 cont">
            <div class="detail-card shadows">
                <img src="images/dev3.jpg" class="dev-img">
                <br><br>
                <p class="normal-text"><b><i class="fa fa-user text-primary"></i> Joshua Buencamino</b></p>
                <p class="normal-text"><b><i class="fa fa-envelope text-warning"></i></b></p>
            </div>
        </div>
    </div>
    <div class="text-center">
    Prof. Engr. Jonathan Taylar
    </div>
</div>
<br><br><br>
<?php 
include('templates/footer.php');
?>