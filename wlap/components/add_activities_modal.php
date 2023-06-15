<div class="modal fade" id="add_activity_modal" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Add learning activities</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="POST">
            <div class="modal-body">
                <p class="small-text">
                    Week
                    <select class="form-control normal-text" name="week" required>
                        <option disabled selected value="">Please select a week</option>
                        <option value="Week 1">Week 1</option>
                        <option value="Week 2">Week 2</option>
                        <option value="Week 3">Week 3</option>
                        <option value="Week 4">Week 4</option>
                    </select>
                </p>

                <p class="small-text">
                    Subject
                    <select class="form-control normal-text" name="subject" required>
                        <option disabled selected value="">Please select a subject</option>
                        <?php 
                        $sql = "select * from subject where user_id = '$user_id'";
                        $res = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_assoc($res)){
                        ?>
                        <option value="<?php echo $row['subject_id']; ?>"><?php echo $row['subject_name']; ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </p>

                <p class="small-text">
                    Type
                    <select class="form-control normal-text" name="type" required>
                        <option disabled selected value="">Please select a week</option>
                        <option value="Assessment Tasks">Assessment Tasks</option>
                        <option value="Learning Activity">Learning Activity</option>
                    </select>
                </p>

                <p class="small-text">
                    Activity
                    <textarea class="form-control normal-text" name="activity" placeholder="enter your activity"></textarea>
                </p>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="add_activity" class="btn btn-primary">Save Activity</button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php 
if(isset($_POST['add_activity'])){
    $week = $_POST['week'];
    $subject_id = $_POST['subject'];
    $activity = $_POST['activity'];
    $type = $_POST['type'];

    $sql = "INSERT INTO activity (subject_id,week,activity,type,user_id) VALUES ('$subject_id','$week','$activity','$type','$user_id')";
    $res = mysqli_query($conn,$sql);
    if($res){
        $_SESSION['insert_success'] = true;
        header('location:create_task.php');
    }
}
?>