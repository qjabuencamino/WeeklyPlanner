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
                <h5 class="large-text"><i class="fa fa-tasks"></i> Create a task</h5>
            </div>
            <br><br>
            <div class="row">
                <div class="col-md-8">
                    <?php 
                    if(isset($_SESSION['insert_success'])){
                        echo '<div class="alert alert-success">Added successfully!</div>';
                        unset($_SESSION['insert_success']);
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <button class="summary-card card-btn" data-bs-toggle="modal" data-bs-target="#ilm_modal">
                        <i class="fa fa-tasks summary-icon"></i>
                        <br><br>
                        <h5><b>Add an intended learning outcomes</b></h5> 
                    </button>
                </div>

                <div class="col-md-4">
                    <button class="summary-card card-btn" data-bs-toggle="modal" data-bs-target="#topic_modal">
                        <i class="fa fa-tasks summary-icon"></i>
                        <br><br>
                        <h5><b>Add a topic</b></h5> 
                    </button>
                </div>
                
            </div>
            <br>
            <div class="row">

                <div class="col-md-4">
                    <button class="summary-card card-btn" data-bs-toggle="modal" data-bs-target="#add_activity_modal">
                        <i class="fa fa-tasks summary-icon"></i>
                        <br><br>
                        <h5><b>Add a teaching and learning activities</b></h5> 
                    </button>
                </div>

                <div class="col-md-4">
                    <button class="summary-card card-btn" data-bs-toggle="modal" data-bs-target="#material_modal">
                        <i class="fa fa-tasks summary-icon"></i>
                        <br><br>
                        <h5><b>Add an instructional materials</b></h5> 
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
include('components/add_activities_modal.php');
include('components/intended_learning_modal.php');
include('components/material_modal.php');
include('components/topic_modal.php');
include('templates/footer.php');
?>