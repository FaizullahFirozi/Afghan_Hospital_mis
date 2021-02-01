<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="staff_list";
        require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->
       
 <?php 
    
    $staff = mysqli_query($con, "SELECT * FROM staff INNER JOIN department ON department.department_id = staff.department_id ORDER BY staff_id DESC ");
    $row_staff = mysqli_fetch_assoc($staff);
       
 
 ?>


                <div class="row">
                    <div class="col-sm-8 col-6">
                        <h4 class="page-title">Staff List </h4>
                    </div>
                    <div class="col-sm-4 col-6 text-right m-b-30">
                        <a href="staff_add.php" class="btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Staff </a>
                    </div>
                </div>
                <!-- <div class="row filter-row">
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <div class="form-group form-focus">
                            <label class="focus-label">Employee Name</label>
                            <input type="text" class="form-control floating">
                        </div>
                    </div>
                   
                    <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                        <a href="#" class="btn btn-success btn-block"> Search </a>
                    </div>
                </div> -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="DataTables_Table_0_length"><label>Show <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"></div></div><div class="row"><div class="col-sm-12"><table class="table table-striped custom-table mb-0 datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                            
                            <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" >Image</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" >ID</th>
                                        <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Employee: activate to sort column descending" style="width:150px;">Full Name</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" >Staff Type</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 129px;">Department</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="From: activate to sort column ascending" style="width: 129px;">Position</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="To: activate to sort column ascending" style="width: 129px;">Age</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="No of Days: activate to sort column ascending" style="width: 156px;">Phone</th>
                                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Reason: activate to sort column ascending" style="width: 225px;">Salary</th>
                                        <th class="text-center sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 168px;">Hire Date</th>
                                        <th class="text-right sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Actions: activate to sort column ascending" style="width: 119px;">Actions</th></tr>
                                </thead>
                                <tbody>
                                    
                                                                        
                                <?php do {  ?>    
                                <tr role="row" class="odd"> 
                               
                                       <td><img class="avatar" src="<?php echo $row_staff["photo"]; ?>" alt="pictur"></td>  
                                       <td><?php echo $row_staff["staff_id"]; ?></td>  
                                        <td><?php echo $row_staff["firstname"]; ?><small> <?php echo $row_staff["lastname"]; ?></small></td>
                                        <td><?php if($row_staff["staff_type"] == 1){ echo "Doctor"; } elseif($row_staff["staff_type"] == 2){ echo "Narse"; } else { echo "Employee";} ?></td>
                                        <td><?php echo $row_staff["department_name"]; ?></td>
                                        <td><?php echo $row_staff["position"]; ?></td>
                                        <td><?php echo date("Y") - $row_staff["dob"]; ?></td>
                                        <td><?php echo $row_staff["phone"]; ?></td>
                                        <td><?php echo $row_staff["gross_salary"]; ?> <small class="text-success"><i> <?php echo $row_staff["currency"]; ?></i></small></td>
                                        <td><?php echo $row_staff["hire_date"]; ?></td>
                                        
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="staff_edit.php?staff_id=<?php echo $row_staff["staff_id"]; ?>"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="staff_delete.php?staff_id=<?php echo $row_staff["staff_id"]; ?>" title="Decline"  data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                            <?php } while ($row_staff = mysqli_fetch_assoc($staff)); ?>
                           
                                </tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 1 to 5 of 5 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="DataTables_Table_0_previous"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="DataTables_Table_0_next"><a href="#" aria-controls="DataTables_Table_0" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
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