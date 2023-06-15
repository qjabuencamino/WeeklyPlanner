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
                <h5 class="large-text"><i class="fa fa-book"></i> My Subjects</h5>
            </div>
            <div class="body bg-white">
                <form method="POST">
                    <div class="row">
                    
                        <p class="normal-text"><b>Add Subject</b></p>
                        <div class="col-md-3">
                            <input class="input-body" name="subject" placeholder="enter subject" type="text" required>
                        </div>
                        <div class="col-md-3">
                            <button class="btn-success btn-add normal-text" name="submit" type="submit">Add subject</button>
                        </div>
                    
                    </div>
                </form>
                <br>
                <div class="table-responsive">
                    <table class="table normal-text">
                        <thead class="table-light">
                            <th>Subject</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "select * from subject where user_id = '$user_id'";
                            $res = mysqli_query($conn,$sql);
                            while($row = mysqli_fetch_assoc($res)){  
                            ?>
                            <tr>
                                <td><b><?php echo $row['subject_name'] ?></b></td>
                                <td>
                                    <a href="subject.php?delete=<?php echo $row['subject_id']; ?>"><button class="btn btn-danger normal-text"><i class="fa fa-trash"></i></button></a>
                                    <button class="btn btn-secondary normal-text" data-bs-toggle="modal" data-bs-target="#edit_subject_<?php echo $row['subject_id']; ?>"><i class="fa fa-edit"></i></button>
                                </td>
                            </tr>

                            <div class="modal fade" id="edit_subject_<?php echo $row['subject_id']; ?>" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="staticBackdropLabel">Edit Subject</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <form method="POST">
                                        <div class="modal-body">
                                            <input type="hidden" name="subject_id" required value="<?php echo $row['subject_id'] ?>">
                                            <p class="small-text">
                                                Subject Name
                                                <input type="text" class="form-control" name="subject" required value="<?php echo $row['subject_name'] ?>">
                                            </p>
                                        </div>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" name="edit_subject" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                            <?php 
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php 
if(isset($_POST['submit'])){
    $subject = $_POST['subject'];
    $sql = "INSERT INTO subject (subject_name,user_id) VALUES ('$subject','$user_id')";
    mysqli_query($conn,$sql);
    header('location:subject.php');
}

if(isset($_POST['edit_subject'])){
    $subject = $_POST['subject'];
    $subject_id = $_POST['subject_id'];
    $sql = "UPDATE subject SET subject_name = '$subject' WHERE subject_id = '$subject_id'";
    mysqli_query($conn,$sql);
    header('location:subject.php');
}
if(isset($_GET['delete'])){
    $subject_id = $_GET['delete'];
    $sql = "DELETE FROM subject where subject_id = '$subject_id'";
    mysqli_query($conn,$sql);
    header('location:subject.php');
}

include('templates/footer.php');
?>