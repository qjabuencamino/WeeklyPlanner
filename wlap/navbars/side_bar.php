<div class="col-md-2">
    <div class="side-bar bg-white">
        <br>
        <div class="text-center">
            <h1><i class="fa fa-user"></i></h1>
            <p class="normal-text"><b>Hello, <?php echo $user['first_name'].' '.$user['last_name']; ?></b></p>
        </div>
        <div class="side-bar-line bg-success"></div>
        <br>
        <div class="side-bar-link-container">
            <a class="normal-text side-bar-link" href="dashboard.php"><i class="fa fa-tachometer big-text"></i>&nbsp; Dashboard</a>
            <hr>
            <p class="normal-text side-bar-text"> Subjects</p>
            <a class="normal-text side-bar-link" href="subject.php"><i class="fa fa-book big-text"></i>&nbsp; My Subjects</a>
            <br>
            <hr>
            <p class="normal-text side-bar-text"> Weekly Tasks</p>
            <a class="normal-text side-bar-link" href="task.php"><i class="fa fa-tasks big-text"></i>&nbsp; My Tasks</a>
            <a class="normal-text side-bar-link" href="create_task.php"><i class="fa fa-tasks big-text"></i>&nbsp; Create Task</a>
            <hr>
            <a class="normal-text side-bar-link" href="dashboard.php?logout=true"><i class="fa fa-sign-out big-text"></i>&nbsp; Logout</a>
        </div>
    </div>
</div>