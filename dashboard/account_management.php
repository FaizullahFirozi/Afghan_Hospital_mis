<?php 
    require_once("include/connection.inc.php");
    $for_active = "account_management";
    require_once("include/header.inc.php");
     ?>
 <!-- header section by faizullah firozi  -->


<!--  code by faizullah firozi wardak 0780002528  -->
<!--  code by faizullah firozi wardak 0780002528  -->
<!--  code by faizullah firozi wardak 0780002528  -->
<!--  code by faizullah firozi wardak 0780002528  -->

<?php

    $users = mysqli_query($con, "SELECT * FROM users");

        $row_users = mysqli_fetch_assoc($users);
?>



    <div class="card card-body  col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-xs-12" >
    
<!-- add -->
<?php if(isset($_GET["add"])) { ?>
                <h1 class="wardak_alert alert-success text-center p-2 col-md-6 offset-3 "> نوی اکونټ په کامیابئ سره اضافه شو </h1>
                <?php } ?>
<!-- delete -->
<?php if(isset($_GET["delete"])) { ?>
                <h1 class="wardak_alert alert-warning text-center p-2 col-md-6 offset-3 "> اکونټ ډیلیټ شو </h1>
                <?php } ?>
<!-- edit -->
<?php if(isset($_GET["edit"])) { ?>
                <h1 class="wardak_alert alert-primary text-center p-2 col-md-6 offset-3 "> اکونټ اپډیټ شو </h1>
                <?php } ?>
 <!-- end Alert section  -->
        <div class="card card-header text-primary ">
        
        
<h1 > Users Accounts List <a href="account_add.php" class="btn btn-outline- btn-outline-danger btn-sm "><b >Create New Account</b></a></h1>

        </div>


        <div class="card card-body ">



            <table class="table table-striped table-hover col-sm-12 col-xs-12">



                <thead class="alert alert-success">
                <tr>
                    <th >Employee Name</th>
                    <th class="text-center" >User Name</th>
                    <th class="text-center" >Reset Password</th>
                    <th class="text-center" >Delete</th>
                    <th class="text-center" >Privilege</th>
                </tr>
                </thead>


                <tbody>

    <?php do { ?>
                    <tr>
                        <td class=""><?php echo $row_users["first_name"] . "  " . $row_users["last_name"] ?></td>
                        <th class="text-center" ><?php echo $row_users["user_name"]; ?></th>

                        <th class="text-center">
                            <a href="account_reset.php?employee_id=<?php echo $row_users["user_id"]; ?>" >
                                <span class="glyphicon glyphicon-retweet">Reset</span>
                            </a>
                        </th>

                        <th class="text-center">
                            <a class="delete" href="account_delete.php?employee_id=<?php echo $row_users["user_id"]; ?>" >
                                <span class="glyphicon glyphicon-trash">Delete</span>
                            </a>
                        </th>

                        <th class="text-center">
                            <a href="account_privilege.php?employee_id=<?php echo $row_users["user_id"]; ?>" >
                                <span class="glyphicon glyphicon-btc">Privilege</span>
                            </a>
                        </th>

                    </tr>
<?php } while ($row_users = mysqli_fetch_assoc($users)); ?>


                </tbody>

            </table>


 <h5 class="text-danger ">All Employee Acounts</h5>


        </div>


    </div>




<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>