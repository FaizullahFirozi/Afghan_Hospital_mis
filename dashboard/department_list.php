<?php require_once("include/connection.inc.php"); ?>
<?php
        $for_active ="department_list";
        require_once("include/header.inc.php"); ?>
        <!-- header section by faizullah firozi  -->

 <?php

        $department = mysqli_query($con, "SELECT * FROM department");

            $row_department = mysqli_fetch_assoc($department);


?>


 <div class="row">
                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Departments</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="department_add.php" class="btn btn-success btn-rounded"><i class="fa fa-plus"></i> Add Department</a>
                        <a href="room_list.php" class="btn btn-primary btn-rounded"><i class="fa fa-road"></i> Rooms</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 offset-3">
                        
 <!-- Start Alert section  -->
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
                <h2 class="wardak_alert alert-success text-center p-2 col-md-7 offset-2 "> نوی ډیپارټمنټ په کامیابئ سره اضافه شو </h2>
                <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h2 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> ډیپارټمنټ ډیلیټ شو </h2>
                <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
                <h2 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> ډیپارټمنټ اپډیټ شو </h2>
                <?php } ?>
 <!-- end Alert section  -->

                        <div class="table-responsive">
                            <table class="table table-striped  custom-table mb-0 datatable">
                                <thead class="thead-dark">
                                    <tr>
                                        <th>#</th>
                                        <th>Department Name</th>
                                        <th>Edit</th>
                                        <th class="text-right">Delete</th>
                                    </tr>
                                </thead>
                                <tbody >

                                     
                                    <?php if($row_department > 0) { ?>

                                    <?php do { ?>

                                    <tr>

                                        <td><?php echo $row_department["department_id"]; ?></td>
                                        <td><h4> <?php echo $row_department["department_name"]; ?></h4></td>
										<td><span class="custom-badge status-green">Active</span></td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right ">
                                                    <a class="dropdown-item" href="department_edit.php?department_id=<?php echo $row_department["department_id"]; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="delete dropdown-item" href="#" data-toggle="modal" ><i class="fa fa-trash-o m-r-5"></i>can't to Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    <?php } while($row_department = mysqli_fetch_assoc($department)); ?>
                                   
                                    <?php } else { ?>

                                  
                                </tbody>

                                
                            </table>
                            
                            <h1 class="alert alert-danger text-center"> تاسو تر اوسه کوم خاص ډیپارټمنټ نه لرئ </h1>
                            
                            <?php } ?>
                        </div>
                    </div>
                </div>

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