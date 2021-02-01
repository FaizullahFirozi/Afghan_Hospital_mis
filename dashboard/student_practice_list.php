<?php require_once("include/connection.inc.php"); ?>
<?php 

    $for_active ="student_practice_list";
    require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->
       
 <?php 
    
    $student_practice = mysqli_query($con, "SELECT * FROM practice INNER JOIN department ON department.department_id = practice.department_id ORDER BY practice_id DESC ");
    $row_student_practice = mysqli_fetch_assoc($student_practice);
       
 
 ?>

<div class="row">

 
<!-- Start Alert section  -->
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
               <h1 class="wardak_alert alert-success text-center p-2 col-md-6 offset-3 "> نوی محصل په کامیابئ سره اضافه شو </h1>
               <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
               <h1 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> محصل ډیلیټ شو </h1>
               <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
               <h1 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> محصل اپډیټ شوه </h1>
               <?php } ?>
<!-- end Alert section  -->


                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Practice</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="student_practice_add.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Student Practice</a>
                           </div>
                </div>

        <?php if($row_student_practice > 0 ) { ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Photo</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Address</th>
                                        <th>University</th>
                                        <th>Department</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Delete Or Edit</th>
                                        </tr>
                                </thead>
                                <tbody>

                                <?php do {  ?> 

                                    <tr>
                                    <td width="5"><?= $row_student_practice["practice_id"]; ?></td>
                                    <td ><img src="<?= $row_student_practice["photo"]; ?>" width="50px" alt="عکس"></td>
                                    <td ><?= $row_student_practice["firstname"]; ?></td>
                                    <td ><?= $row_student_practice["lastname"]; ?></td>
                                    <td ><?= $row_student_practice["phone"]; ?></td>
                                    <td ><?= $row_student_practice["email"]; ?></td>
                                    <td ><?php if($row_student_practice["gender"] == 0) { echo "Male"; } else { echo "Female"; } ?></td>
                                    <td ><?= $row_student_practice["address"]; ?></td>
                                    <td ><?= $row_student_practice["university"]; ?></td>
                                    <td ><?= $row_student_practice["department_name"]; ?></td>
                                    <td ><?= $row_student_practice["start_date"]; ?></td>
                                    <td ><?= $row_student_practice["end_date"]; ?></td>
                                       
                                    <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                <?php } while($row_student_practice = mysqli_fetch_assoc($student_practice)); ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <?php } else { ?>

<h1 class="alert alert-danger text-center"> تاسو تر اوسه کوم محصل ندی ثبت کړئ </h1>

<?php } ?>

<div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- leaves23:23-->
</html>