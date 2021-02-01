<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active = "blood_edit";


$blood_bank_id =  getValue($_GET["blood_bank_id"]);

$blood_bank = mysqli_query($con, "SELECT * FROM blood_bank WHERE blood_bank_id = $blood_bank_id");
$row_blood_bank = mysqli_fetch_assoc($blood_bank);


    if(isset($_POST["submit"]))
    {
        
            $blood_group = getValue($_POST["blood_group"]);
            $quantity = getValue($_POST["quantity"]);
            $expire_date = getValue($_POST["expire_date"]);
          
            $result = mysqli_query($con, "UPDATE blood_bank SET blood_group='$blood_group', quantity=$quantity, expire_date='$expire_date' WHERE blood_bank_id = $blood_bank_id");
           
            if($result)
                {
                    header("location:blood_list.php?edit=done");
                } 
            else
                {
                    header("location:blood_edit.php?error=notadd");
                }

         
    }



?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row">
                    <div class="col-md-6 offset-3 bg-warning ">
                        
                                                               
 <!-- error -->
<?php if(isset($_GET["error"])) { ?>
                <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> وینه تغیر نه شوه بیا کوښښ وکړئ </h1>
                <?php } ?>

                        <div class="card-box mt-4">
                            <h1 class="card-title text-success ">Edit New Blood</h1>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Blood Group</label>
                                            <div class="col-md-9">
                                                <select class="select select2-hidden-accessible" name="blood_group">
                                                       
                                                        <option value="A+" <?php if($row_blood_bank["blood_group"] == "A+") { echo "selected"; } ?> >A+</option>
                                                        <option  value="B+" <?php if($row_blood_bank["blood_group"] == "B+") { echo "selected"; } ?> >B+</option>
                                                   
                                                </select>
                                           </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Quantity</label>
                                            <div class="col-md-9">
                                                <input type="number" value="<?= $row_blood_bank["quantity"]; ?>" name="quantity" required autocomplete="off"   class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Expire Date</label>
                                            <div class="col-md-9">
                                                <input type="date" name="expire_date" value="<?= $row_blood_bank["expire_date"]; ?>" required autocomplete="off"  placeholder="Phone" class="form-control">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="btn  btn-outline-success w-100">Edit Blood</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>