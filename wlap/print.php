<?php
include('templates/header.php'); 
if($_SESSION['week'] != '' && $_SESSION['subject'] != '') {
    include('db/connection.php');
    include('validate_login.php');
    $week = $_SESSION['week'];
    $subject_id = $_SESSION['subject'];
    $sql = "SELECT * FROM subject where subject_id = '$subject_id'";
    $res = mysqli_query($conn,$sql);
    $sub = mysqli_fetch_assoc($res);

    $sql = "SELECT * FROM ilo WHERE week = '$week' AND subject_id = '$subject_id' AND user_id = '$user_id'";
    $ilo = mysqli_query($conn,$sql);

    $sql = "SELECT * FROM topic WHERE week = '$week' AND subject_id = '$subject_id' AND user_id = '$user_id'";
    $topic = mysqli_query($conn,$sql);

    $sql = "SELECT * FROM activity WHERE week = '$week' AND subject_id = '$subject_id' AND user_id = '$user_id'";
    $activity = mysqli_query($conn,$sql);

    $sql = "SELECT * FROM material WHERE week = '$week' AND subject_id = '$subject_id' AND user_id = '$user_id'";
    $material = mysqli_query($conn,$sql);

?>
    <div class="text-center">
        <h5><b><?php echo $sub['subject_name'].' - '.$week ?></b></h5>
        <br>
    </div>
    <table class="table table-bordered">
    <thead class="table-light small-text">
        <th><b>Intended Learning Outcome</b></th>
        <th><b>Topics</b></th>
        <th><b>Teaching and Learning Activities and Assessment Tasks</b></th>
        <th><b>Instructional Materials</b></th>
        <th><b>Remarks</b></th>
    </thead>
    <tbody>
        <tr>
        <!--ILO--->
            <td>
            <ol>
                    <?php 
                    while($row = mysqli_fetch_assoc($ilo)){
                    ?>
                        <li class="small-text"><?php echo $row['ilo']; ?></li><br>
                    <?php   
                    }
                    ?>
            </ol>
            </td>
            <!--TOPICS--->
            <td>
                <ol>
                    <?php 
                    while($row = mysqli_fetch_assoc($topic)){
                    ?>
                        <li class="small-text"><b><?php echo $row['type'].'</b> : '.$row['topic']; ?></li><br>
                    <?php   
                    }
                    ?>
            </ol>
            </td>
            <!--ACTIVITY--->
            <td>
                <ol>
                    <?php 
                    while($row = mysqli_fetch_assoc($activity)){
                    ?>
                        <li class="small-text"><b><?php echo $row['type'].'</b> : '.$row['activity']; ?></li><br>
                    <?php   
                    }
                    ?>
            </ol>
            </td>
            <!--MATERIALS--->
            <td>
                <ol>
                    <?php 
                    while($row = mysqli_fetch_assoc($material)){
                    ?>
                        <li class="small-text"><b><?php echo $row['type'].'</b> : '.$row['material']; ?></li><br>
                    <?php   
                    }
                    ?>
                </ol>
            </td>
            <td></td>
        </tr>
    </tbody>
    </table>
    
<?php
}
include('templates/footer.php');
?>
<script>
    $(document).ready(function(){
        window.print();
    });
</script>
