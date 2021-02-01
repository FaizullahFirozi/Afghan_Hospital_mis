<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="doctor";

        require_once("include/header.inc.php"); ?>

<?php  // code for  Doctors
    $doctor = mysqli_query($con, "SELECT * FROM staff WHERE staff_type=1");
    $row_doctor = mysqli_fetch_assoc($doctor);
?>
 <!-- header section by faizullah firozi  -->
 

 <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Doctors</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                        <a href="staff_add.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Doctor</a>
                    </div>
                </div>
				<div class="row doctor-grid">
        <?php do { ?>
                    <div class="col-md-4 col-sm-4  col-lg-3">
                        <div class="profile-widget">
                            <div class="doctor-img">
                                <a class="avatar" href="profile.html"><img alt="" src="<?= $row_doctor["photo"]; ?>"></a>
                            </div>
                            <div class="dropdown profile-action">
                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(23px, 27px, 0px);">
                                    <a class="dropdown-item" href="staff_edit.php?staff_id=<?php echo $row_doctor["staff_id"]; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                    <a class="dropdown-item" href="staff_delete.php?staff_id=<?php echo $row_doctor["staff_id"]; ?>" ><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                </div>
                            </div>
                            <h4 class="doctor-name text-ellipsis"><a href="profile.html"><?= $row_doctor["firstname"]; ?></a></h4>
                            <div class="doc-prof"><?= $row_doctor["lastname"]; ?></div>
                            <div class="user-country">
                                <i class="fa fa-map-marker"></i> United States, San Francisco
                            </div>
                        </div>
                    </div>
                   
        <?php } while ($row_doctor = mysqli_fetch_assoc($doctor)); ?>

                    
                   
                </div>
				<div class="row">
                    <div class="col-sm-12">
                        <div class="see-all">
                            <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                        </div>
                    </div>
                </div>
            </div>


<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>