<?php ob_start(); ?>
<?php require_once("include/connection.inc.php"); 
$for_active ="test_list";
require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->


 <?php 

                               
$test = mysqli_query($con, "SELECT * FROM test ");
$row_test = mysqli_fetch_assoc($test);
?>

<div class="card card-body">

    <div class="card card-header">

        <div class="text-right">
            <a href="test_add.php" class="btn btn-outline-primary btn-lg w-25 " ><span class="glyphicon glyphicon-plus"> Add Test </span></a>
        </div>
        <h1> Test <small style="color:red"><?php echo date("F Y"); ?></small></h1>


        </div>
    

    
    <!-- if Absent employee  -->
    <?php if(isset($_GET["add"])){ ?>

<div class="wardak_alert alert alert-success alert-dismissable col-lg-8 offset-2" style="font-size:25px; color:tomato; text-align:center">

<button class="close " area-hidden="true" data-dismiss="alert" style="font-size:30px; color:red">&#88;</button>
  Success Absent ! ټسټ اضافه شو
</div>
<?php } ?>


    <div class="card card-body">

    
    

             

        <table class="table table-striped table-hover ">
            
        <?php if($row_test > 0) { ?>
        <thead>
        <tr class="bg-info">
                <th class="text-center" width="10" >ID</th>
                <th class="text-center" >Test Name </th>
                <th class="text-center" >Test Type </th>
                <th class="text-center" >Price </th>
                <th class="text-center" >Normal Result</th>
               
               
            </tr>
</thead>

            <?php do { ?>
                <tbody>
            <tr>
                <td class="text-center" ><?php echo $row_test["test_id"]; ?></td>
                <td class="text-center" ><?php echo $row_test["test_name"];  ?></td>
                <td class="text-center" ><?php echo $row_test["test_type"];  ?></td>
                <td class="text-center" ><?php echo $row_test["price"];  ?><span> - AFN</span></td>
                <td class="text-center" ><?php echo $row_test["normal_result"];  ?></td>
               
                
            </tr>
            </tbody>
            <?php } while($row_test = mysqli_fetch_assoc($test)); ?>

 <!-- if list employee attendance empty -->
            <?php } else { ?>
                    <div class="text-center">
                    <br>
                    <br>
                    <br>
                    <h1 class="text-center label label-success well-lg" style="font-size:18px"> تاسو تر اوسه ټسټ نلرئ مهربانی وکړئ اضافه یی کړئ</h1>
                    </div>
            <?php }  ?>

        </table>   
</div>		
    </div>

</div>




<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>