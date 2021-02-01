<?php ob_start(); ?>
<?php
        require_once("include/connection.inc.php");
        $for_active ="department_add";
        require_once("include/header.inc.php");
                            //   header section by faizullah firozi  


    $error_department_name = "";
    $error = false;

    if(isset($_POST["submit"])){
        if(!empty($_POST["department_name"])){
           
            if(strlen($_POST["department_name"]) < 5 ){
                $error_department_name = " * Department Name Must be al lest 5 ";
                $error = true;
            } 
            if(!ctype_alpha($_POST["department_name"])){
                $error_department_name = " * Your Department Name Must be Alphabitic ";
                $error = true;
            } 
        }else{
            $error_department_name = " * Please Enter Your Department Name !";
            $error = true;
        }

        if(!$error){
            $department_name = getValue($_POST["department_name"]);
            $sql = "INSERT INTO department VALUES(NULL, '$department_name')";
            $result = mysqli_query($con, $sql);

            if($result){
                header("location:department_list.php?add=done");
            }else{
                header("location:department_add.php?error=notadd");
            }
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
								<input class="form-control" type="text" name="department_name">
                                <b class="text-danger" ><?php if($error) echo $error_department_name; ?></b>
							</div>
                            
                            </div>
                            <div class="col-lg-12 m-t-20 text-center">
                                <button name='submit' class="btn btn-primary submit-btn" >Create Department</button>
                            </div>
                        </form>
                    </div>
                </div>


<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>