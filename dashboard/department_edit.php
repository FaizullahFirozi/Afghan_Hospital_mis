<?php ob_start(); ?>
<?php 
        require_once("include/connection.inc.php"); 
        $for_active ="department_edit";
        require_once("include/header.inc.php"); 
?>
 <!-- header section by faizullah firozi  -->

<?php

        $department_id = getValue($_GET["department_id"]);
        $department = mysqli_query($con, "SELECT * FROM department WHERE department_id = $department_id");
        $row_department = mysqli_fetch_assoc($department);
       

        if(isset($_POST["department_name"]))
        {
            $department_name = getValue($_POST["department_name"]);

            $result = mysqli_query($con, "UPDATE department SET department_name='$department_name' WHERE department_id=$department_id");
            if($result)
            {
                header("location:department_list.php?edit=done");
            }
            else
            {
                header("location:department_edit.php?department_id=$department_id&error=notedit");

            }
        }



?>




 
 <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Add Department</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form method="post">
							<div class="form-group">
								<label>Department Name</label>
								<input class="form-control" type="text" name="department_name" value="<?php echo $row_department["department_name"]; ?>" >
							</div>
                            
                            </div>
                            <div class="col-lg-12 m-t-20 text-center">
                                <button class="btn btn-warning submit-btn" >Edit Department</button>
                            </div>
                        </form>
                    </div>
                </div>
                                           
 <!-- error -->
 <?php if(isset($_GET["error"])) { ?>
                <h2 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> ډیپارټمنټ تغیر نه شو بیا کښښ وکړئ! امکان لری په دی نوم ډیپارټمنټ وجود ولری </h2>
                <?php } ?>


<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>