<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active = "blood_list";

   $blood_bank =  mysqli_query($con, "SELECT * FROM blood_bank ORDER BY blood_bank_id DESC");
    $row_blood_bank = mysqli_fetch_assoc($blood_bank);

?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->


 <div class="row">

 
 <!-- Start Alert section  -->
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
                <h1 class="wardak_alert alert-success text-center p-2 col-md-6 offset-3 "> نوی وینه په کامیابئ سره اضافه شو </h1>
                <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h1 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> وینه ډیلیټ شو </h1>
                <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
                <h1 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> وینه اپډیټ شوه </h1>
                <?php } ?>
 <!-- end Alert section  -->


                    <div class="col-sm-5 col-5">
                        <h4 class="page-title">blood_bank</h4>
                    </div>
                    <div class="col-sm-7 col-7 text-right m-b-30">
                        <a href="blood_add.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add Blood ‌‌Bank</a>
                           </div>
                </div>

        <?php if($row_blood_bank > 0 ) { ?>

                <div class="row">
                    <div class="col-md-4 offset-4">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>‌Blood Group</th>
                                        <th>Quantity</th>
                                        <th>Expire Date</th>
                                        <th>Delete Or Edit</th>
                                     </tr>
                                </thead>
                                <tbody>
                                <?php do {  ?> 

                                    <tr>
                                        <td width="5"><?= $row_blood_bank["blood_bank_id"]; ?></td>
                                        <td><?= $row_blood_bank["blood_group"]; ?></td>
                                        <td><?= $row_blood_bank["quantity"]; ?></td>
                                        <td><?= $row_blood_bank["expire_date"]; ?></td>
                                        
										 <td width="80" class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="blood_edit.php?blood_bank_id=<?= $row_blood_bank["blood_bank_id"]; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="blood_delete.php?blood_bank_id=<?= $row_blood_bank["blood_bank_id"]; ?>" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                                <?php } while($row_blood_bank = mysqli_fetch_assoc($blood_bank)); ?>
                                 </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <?php } else { ?>

            <h1 class="alert alert-danger text-center"> تاسو تر اوسه کوم وینه ندی ثبت کړئ </h1>

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