<?php ob_start(); ?>
<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="room_add";
        require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->


 <?php 

$department = mysqli_query($con, "SELECT * FROM department ORDER BY department_id ASC");
$row_department = mysqli_fetch_assoc($department);


if(isset($_POST["capacity"])) {

    $room_no = getValue($_POST["room_no"]);
    $room_type = getValue($_POST["room_type"]);
    $department_id = getValue($_POST["department_id"]);
    $capacity = getValue($_POST["capacity"]);
    
   $result = mysqli_query($con, "INSERT INTO room VALUES (NULL,'$room_no', '$room_type', $department_id, $capacity)");
    if ($result) {
    header("location:room_list.php?add=done");

    } else {
        header("location:room_add.php?error=notupdate");

    }




}

?>

<div class="card card-header col-lg-6 offset-lg-3 mt-2">

    <div class="card card-header text-danger">

        <h1>
            <span class="glyphicon glyphicon-plus"></span> Add Rooms 
            <span class="glyphicon glyphicon-plus"></span>
            </h1>
    </div>

    <div class="card card-body">

    <!-- form  -->
    <form method="post">

    
    <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

         Room NO:</span> 
                     
                     <input autocomplete="off" type="text" name="room_no" class="form-control">
            </select>
        </div>
    <div class="input-group-text m-2">
       <span class="w-25">
       <span class="glyphicon glyphicon-user"></span>


            Room Type:</span> <select class="form-control" name="room_type">
                     
                        <option value="General"> General </option>
                        <option value="VIP"> VIP </option>
                    
            </select>
        </div>
    <div class="input-group-text m-2">
       <span class="w-25">
       <span class="glyphicon glyphicon-user"></span>


            Department Name :</span> <select class="form-control" name="department_id">
                     
                     <?php do { ?>
                        <option value="<?= $row_department["department_id"]; ?>"> <?= $row_department["department_name"]; ?> </option>
                     <?php } while ($row_department = mysqli_fetch_assoc($department)); ?>
                    
            </select>
        </div>

        <div class="input-group-text m-2">
       <span class="w-25">
         <span class="glyphicon glyphicon-time"></span>

         Capacity:</span> 
                     
                     <input autocomplete="off" type="number" name="capacity" class="form-control">
            </select>
        </div>

        <input type="submit" value="Add Room" class="btn btn-outline-danger m-3">
    </form>
<!-- message orror -->
    <?php if(isset($_GET["error"])) { ?>
                    <h3 class="wardak_alert alert alert-danger alert-dismissable text-center" >
                        <button class="close" area-hidden="true" data-dismiss="alert">&times </button>
                اطاق اضافه نشو بیا هڅه وکړئ
                    </h3>

                <?php } ?>
        </div>

</div>






<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>