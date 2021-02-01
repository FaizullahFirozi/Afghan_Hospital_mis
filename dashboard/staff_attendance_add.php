<?php ob_start(); ?>
<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="staff_attendance_add";
        require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->


 <?php 

$staff = mysqli_query($con , "SELECT staff_id, CONCAT(firstname, '  -  ' , lastname) AS staff_name FROM staff ORDER BY firstname ASC , lastname ASC");
$row_staff = mysqli_fetch_assoc($staff);

if(isset($_POST["absent_hour"])) {

    $staff_id = getValue($_POST["staff_id"]);
    $hour = getValue($_POST["absent_hour"]);

    $year = date("Y");
    $month = date("m");
    $day = date("d");

 
   $result = mysqli_query($con, "INSERT INTO attendance VALUES ($staff_id, $year, $month, $day, $hour)");
    if ($result) {
    header("location:staff_attendance_list.php?add=done");

    } else {
        header("location:staff_attendance_add.php?error=notupdate");

    }




}

?>

<div class="card card-header col-lg-6 offset-lg-3 mt-2">

    <div class="card card-header text-danger">

        <h1>
            <span class="glyphicon glyphicon-plus"></span> Add staff Attendance 
            <span class="glyphicon glyphicon-plus"></span>
            </h1>
    </div>

    <div class="card card-body">

    <!-- form  -->
    <form method="post">
            
    <div class="input-group-text m-2">
       <span class="w-25">
       <span class="glyphicon glyphicon-user"></span>


            staff:</span> <select class="form-control" name="staff_id">
                     
                     <?php do { ?>
                        <option value="<?= $row_staff["staff_id"]; ?>"> <?= $row_staff["staff_name"]; ?> </option>
                     <?php } while ($row_staff = mysqli_fetch_assoc($staff)); ?>
                    
            </select>
        </div>

        <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

            Absent Hour:</span> 
                     
                     <input autocomplete="off" type="number" name="absent_hour" class="form-control">
            </select>
        </div>

        <input type="submit" value="Add Absent" class="btn btn-outline-danger m-3">
    </form>
<!-- message orror -->
    <?php if(isset($_GET["error"])) { ?>
                    <h3 class="wardak_alert alert alert-danger alert-dismissable text-center" >
                        <button class="close" area-hidden="true" data-dismiss="alert">&times </button>
                    په یوه ورځ کی نشئ کولای کارکوونکئ دوو 2 ځلی غیرحاضر کړئ
                    </h3>

                <?php } ?>
        </div>

</div>






<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>