<?php require_once("include/connection.inc.php"); ?>
<?php 

    $for_active = "advertisement_list";
   
    $advertisement =  mysqli_query($con, "SELECT * FROM advertisement ORDER BY advertisement_id DESC");
    $row_advertisement = mysqli_fetch_assoc($advertisement);

?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->


 <div class="row">

 
 <!-- Start Alert section  -->
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
                <h1 class="wardak_alert alert-success text-center p-2 col-md-6 offset-3 "> نوی اعلان په کامیابئ سره اضافه شو </h1>
                <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h1 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> اعلان ډیلیټ شو </h1>
                <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
                <h1 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> اعلان اپډیټ شو </h1>
                <?php } ?>
 <!-- end Alert section  -->


                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">Advertisement</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="advertisement_add.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Advertisement</a>
                           </div>
                </div>

        <?php if($row_advertisement > 0 ) { ?>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>URL</th>
                                        <th>Photo</th>
                                        <th>Start_date</th>
                                        <th>End_date</th>
                                        <th>Delete</th>
                                        </tr>
                                </thead>
                                <tbody>
                                <?php do {  ?> 

                                    <tr>
                                        <td width="5"><?= $row_advertisement["advertisement_id"]; ?></td>
                                        <td><?= $row_advertisement["title"]; ?></td>
                                        <td><?= $row_advertisement["description"]; ?></td>
                                        <td><?= $row_advertisement["url"]; ?></td>
                                        <td><?= $row_advertisement["photo"]; ?></td>
                                        <td width="80"><?= $row_advertisement["start_date"]; ?></td>
                                        <td width="80" class="text-danger"><?= $row_advertisement["end_date"]; ?></td>
                                        
										 <td width="80" class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="advertisement_edit.php?advertisement_id=<?= $row_advertisement["advertisement_id"]; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="advertisement_delete.php?advertisement_id=<?= $row_advertisement["advertisement_id"]; ?>" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                <?php } while($row_advertisement = mysqli_fetch_assoc($advertisement)); ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <?php } else { ?>

            <h1 class="alert alert-danger text-center"> تاسو تر اوسه کوم اعلان ندی ثبت کړئ </h1>

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