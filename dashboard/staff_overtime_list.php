<?php ob_start(); ?>
<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="staff_overtime_list";
        require_once("include/header.inc.php"); 
        ?>
 <!-- header section by faizullah firozi  -->


 <?php

$curyear = date("Y");
$curmonth = date("m");


$overtime = mysqli_query($con, "SELECT staff.staff_id , firstname, lastname, photo, SUM(over_hour) AS total FROM staff INNER JOIN overtime ON staff.staff_id = overtime.staff_id WHERE overtime_year = $curyear AND overtime_month = $curmonth GROUP BY overtime.staff_id");

$row_overtime = mysqli_fetch_assoc($overtime);



?>



<div class="card card-header mt-4  col-lg-8 offset-lg-2 " style="padding:0">

    <div class="card card-header">
<div class="text-right">
<a href="staff_overtime_add.php" class="btn btn-outline-danger w-25" ><span class="glyphicon glyphicon-plus "> Add OverTime </span></a>
</div>


    <h3> Employee Overtime <small style="color:red"><?php echo date("F Y D"); ?></small></h3>
    

</div>


<div class="card card-body ">


<!-- if Overtime employee  -->
<?php if(isset($_GET["add"])){ ?>
<br>
<div class="wardak_alert alert alert-success alert-dismissable col-lg-10 offset-1" style="font-size:20px; color:tomato; text-align:center">

<button class="close " area-hidden="true" data-dismiss="alert" style="font-size:30px; color:red">&#88;</button>
Success Overtime ! کارکوونکی ته اضافه کاری وخت زیات شو</div>
<?php } ?>

<table class="table table-striped table-hover">

<?php if ($row_overtime > 0 ) { ?>
<thead class="alert alert-success"> 
<tr>
    <th class="text-center" >ID</th>
    <th class="text-center" >First Name</th>
    <th class="text-center" >Last Name</th>
    <th class="text-center" >Photo</th>
    <th class="text-center" >Total Hour</th>
</tr>
</thead>


<tbody>

            <?php do { ?>
        <tr>
            <td class="text-center" ><?php echo $row_overtime["staff_id"]; ?> </td>
            <td class="text-center" ><?php echo $row_overtime["firstname"]; ?> </td>
            <td class="text-center" ><?php echo $row_overtime["lastname"]; ?> </td>
            <td class="text-center" ><img src="<?php echo $row_overtime["photo"]; ?>" width="40" class="img-rounded"> </td>
            <td class="text-center" style="color:yellowgreen" ><h3><?php echo $row_overtime["total"]; ?> <small> hrs </small></h3></td>
            
        </tr>
            <?php } while($row_overtime = mysqli_fetch_assoc($overtime)); ?>
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

</div>


<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>