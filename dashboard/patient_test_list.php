<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="patient_test_list";
        require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <?php

    $patient = mysqli_query($con, "SELECT * FROM patient_test INNER JOIN patient ON patient.patient_id=patient_test.patient_id");
    $row_patient = mysqli_fetch_assoc($patient);

    $test = mysqli_query($con, "SELECT * FROM patient_test INNER JOIN test ON test.test_id=patient_test.test_id  ");
    $row_test = mysqli_fetch_assoc($test);


?>

<div class="card card-header mt-4  col-lg-8 offset-lg-2 " style="padding:0">

<div class="card card-header">
<div class="text-right">
<a href="patient_test_add.php" class="btn btn-outline-danger w-25" ><span class="glyphicon glyphicon-plus "> Add Patient Test </span></a>
</div>


<h3> Patient Test <small style="color:red"><?php echo date("F Y D"); ?></small></h3>


</div>


<div class="card card-body ">

       
 <!-- Start Alert section  -->
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
                <h2 class="wardak_alert alert-success text-center p-2 col-md-7 offset-2 "> نوی ټست په کامیابئ سره اضافه شو </h2>
                <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h2 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> ټست ډیلیټ شو </h2>
                <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
                <h2 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> ټست اپډیټ شو </h2>
                <?php } ?>
 <!-- end Alert section  -->
<table class="table table-striped table-hover">

<?php if ($row_patient > 0 ) { ?>
<thead class="alert alert-success"> 
                <tr>
                    <th class="text-center">Patient ID</th>
                    <th class="text-center">Patient Name</th>
                    <th class="text-center">Test Name</th>
                    <th class="text-center">Test Date</th>
                    <th class="text-center">Test Result</th>
                    <th class="text-center">Test Price</th>
                    <th class="text-center" class="text-right">Edit</th>
                </tr>
</thead>


<tbody>

        <?php do { ?>
    <tr>
        <td class="text-center" ><?php echo $row_patient["patient_id"]; ?> </td>
        <td class="text-center" ><?php echo $row_patient["firstname"]; ?> </td>
        <td class="text-center" ><?php echo $row_test["test_name"]; ?> </td>
        <td class="text-center" ><?php echo $row_patient["test_date"]; ?> </td>
        <td class="text-center" ><?php echo  $row_patient["test_result"]; ?> </td>
        <td class="text-center" ><?php echo  $row_test["price"]; ?> </td>
       
    </tr>
        <?php } while($row_patient = mysqli_fetch_assoc($patient)); ?>
        <?php } else { ?>

            <div class="text-center ">
            <br>
            <br>
            <br>
            <h1 class="text-center label label-success well-lg"  style="font-size:18px">لاتر اوسه ټست نلرئ</h1>
            </div>

        <?php }  ?>

</tbody>

</table>


</div>



<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>