<?php require_once("include/connection.inc.php"); ?>
<?php
        $for_active ="room_list";
        require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <?php

        $room = mysqli_query($con, "SELECT * FROM room INNER JOIN department ON room.department_id=department.department_id");

            $row_room = mysqli_fetch_assoc($room);


?>

<div class="card card-header mt-4  col-lg-8 offset-lg-2 " style="padding:0">

<div class="card card-header">
<div class="text-right">
<a href="room_add.php" class="btn btn-outline-danger w-25" ><span class="glyphicon glyphicon-plus "> Add Room </span></a>
</div>


<h3> Rooms <small style="color:red"><?php echo date("F Y D"); ?></small></h3>


</div>


<div class="card card-body ">

       
 <!-- Start Alert section  -->
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
                <h2 class="wardak_alert alert-success text-center p-2 col-md-7 offset-2 "> نوی اطاق په کامیابئ سره اضافه شو </h2>
                <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h2 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> اطاق ډیلیټ شو </h2>
                <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
                <h2 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> اطاق اپډیټ شو </h2>
                <?php } ?>
 <!-- end Alert section  -->
<table class="table table-striped table-hover">

<?php if ($row_room > 0 ) { ?>
<thead class="alert alert-success"> 
                <tr>
                    <th class="text-center">Room ID</th>
                    <th class="text-center">Room NO</th>
                    <th class="text-center">Room Type</th>
                    <th class="text-center">Department</th>
                    <th class="text-center">Capacity</th>
                    <th class="text-center" class="text-right">Edit</th>
                </tr>
</thead>


<tbody>

        <?php do { ?>
    <tr>
        <td class="text-center" ><?php echo $row_room["room_id"]; ?> </td>
        <td class="text-center" ><?php echo $row_room["room_no"]; ?> </td>
        <td class="text-center" ><?php echo $row_room["room_type"]; ?> </td>
        <td class="text-center" ><?php echo $row_room["department_name"]; ?> </td>
        <td class="text-center" ><?php echo  $row_room["capacity"]; ?> </td>
        <td class="text-center" >
        <a href="room_edit.php?room_id=<?= $row_room["room_id"]; ?>">Edit</a> 
        </td>
 
    </tr>
        <?php } while($row_room = mysqli_fetch_assoc($room)); ?>
        <?php } else { ?>

            <div class="text-center ">
            <br>
            <br>
            <br>
            <h1 class="text-center label label-success well-lg"  style="font-size:18px"> تاسو په دی میاشت کی هیڅ د کارکوونکی اضافه کاری ساعتونه نه لرئ</h1>
            </div>

        <?php }  ?>

</tbody>

</table>


</div>



<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>