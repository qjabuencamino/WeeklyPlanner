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
                <h5 class="large-text"><i class="fa fa-tasks"></i> My Tasks</h5>
            </div>
            <div class="body bg-white">
                <div class="row">
                    <div class="col-md-2">
                        <p class="small-text">
                            Select a subject<br>
                            <select class="form-control normal-text" id="subject" name="subject" required>
                                <option disabled value="" selected>Please select subject</option>
                                <?php 
                                $sql = "select * from subject where user_id = '$user_id'";
                                $res = mysqli_query($conn,$sql);
                                while($row = mysqli_fetch_assoc($res)){
                                    ?>
                                        <option value="<?php echo $row['subject_id'] ?>"><?php echo $row['subject_name'] ?></option>
                                    <?php
                                }
                                ?>
                            </select>
                        </p>
                    </div>
                    <div class="col-md-2">
                        <p class="small-text">
                            Select a week<br>
                            <select class="form-control normal-text" id="week" name="week" required>
                                <option disabled value="" selected>Please select subject</option>
                                <option value="Week 1" >Week 1</option>
                                <option value="Week 2" >Week 2</option>
                                <option value="Week 3" >Week 3</option>
                                <option value="Week 4" >Week 4</option>
                            </select>
                        </p>
                    </div>

                    <div class="col-md-2">
                        <p class="small-text">
                            <br>
                            <button type="button" class="btn-success form-control btn-add" id="filter_btn"><i class="fa fa-search"></i> Apply filter</button>
                        </p>
                    </div>

                    <div class="col-md-2">
                        <p class="small-text">
                            <br>
                            <button type="button" name="print" class="btn-success form-control btn-add" id="print_btn"><i class="fa fa-print"></i> Print</button>
                        </p>
                    </div>
                </div>
                <br>
                <div class="table-responsive" id="table">
                    <table class="table table-bordered">
                        <thead class="table-light small-text">
                            <th><b>Intended Learning Outcome</b></th>
                            <th><b>Topics</b></th>
                            <th><b>Teaching and Learning Activities and Assessment Tasks</b></th>
                            <th><b>Instructional Materials</b></th>
                        </thead>
                        <tbody>
                            <!--ILO--->
                            <td></td>
                            <!--TOPICS--->
                            <td></td>
                            <!--TASKS--->
                            <td></td>
                            <!--MATERIALS--->
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<iframe id="report-frame" src="about:blank" data-src="print.php" style="display:none;"></iframe>
<?php 
include('templates/footer.php');
?>
<script src="js/apply_filter.js"></script>
