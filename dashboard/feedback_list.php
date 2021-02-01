<?php require_once("include/connection.inc.php"); ?>
<?php 

 $feedback = mysqli_query($con, "SELECT * FROM feedback ORDER BY feedback_id DESC ");
 $row_feedback = mysqli_fetch_assoc($feedback);

 $total_feedback = mysqli_query($con, "SELECT count(feedback_id) as total_feedback FROM feedback ");
 $row_total_feedback = mysqli_fetch_assoc($total_feedback);

?>
 <!-- header section by faizullah firozi  -->
 <?php
        $for_active ="feedback_list";
        require_once("include/header.inc.php"); ?>


 <div class="row">


                    <div class="col-sm-5 col-5">
                        <h4 class="page-title text-danger">Feedback</h4>
                        <h1 class=" text-center">Total Feedback: <span class="badge bg-danger text-light"><?= $row_total_feedback["total_feedback"]; ?></badge></h1>
                    </div>
                    
                <div class="row">
                    
                    <div class="col-md-12">

  <!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h2 class="wardak_alert alert-success text-center p-2 col-md-6 offset-3 "> Feedback Successful Deleted </h2>
    <?php } ?>

                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Title or subject</th>
                                        <th>Message</th>
                                        <th>Email</th>
                                        <th>Photo</th>
                                        <th>Feedback_date</th>
                                        <th >Delete</th>
                                        
                                        </tr>
                                </thead>
                                <tbody>
                                    <?php do { ?>
                                    <tr>
                                        <td width="5" ><?= $row_feedback["feedback_id"]; ?></td>
                                        <td width="80" ><?= $row_feedback["name"]; ?></td>
                                        <td width="120" ><?= $row_feedback["title"]; ?></td>
										<td ><?= $row_feedback["message"]; ?></td>
										<td width="50" ><a href="mailto:<?= $row_feedback["email"]; ?>"><?= $row_feedback["email"]; ?></a></td>
										<td width="50" ><a href="tel:<?= $row_feedback["phone"]; ?>"><?= $row_feedback["phone"]; ?></a></td>
										<td width="50" ><h4 class="text-danger"><?= $row_feedback["feedback_date"]; ?></h4></td>
                                        <td  class="text-right">
                                           <a class="delete dropdown-item btn btn-danger  " href="feedback_delete.php?feedback_id=<?= $row_feedback["feedback_id"]; ?>"  ><i class="fa fa-trash-o m-r-5 text-light"></i></a>    
                                        </td>
                                    </tr>
                                    <?php } while ($row_feedback = mysqli_fetch_assoc($feedback)); ?>
                                   
                                  
                                </tbody>
                            </table>
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