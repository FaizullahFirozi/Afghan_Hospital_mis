<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active = "blood_add";

    if(isset($_POST["submit"]))
    {
        
            $blood_group = getValue($_POST["blood_group"]);
            $quantity = getValue($_POST["quantity"]);
            $expire_date = getValue($_POST["expire_date"]);
          
           
                $blood = mysqli_query($con, "INSERT INTO blood_bank VALUES(NULL, '$blood_group', $quantity, '$expire_date')");
            if($blood)
                {
                    header("location:blood_list.php?add=done");
                } 
            else
                {
                    header("location:blood_add.php?error=notadd");
                }

         
    }



?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row">
                    <div class="col-md-6 offset-3 bg-info ">
                        
                                                               
 <!-- error -->
<?php if(isset($_GET["error"])) { ?>
                <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> وینه اضافه نه شوه بیا کوښښ وکړئ </h1>
                <?php } ?>

                        <div class="card-box mt-4">
                            <h1 class="card-title text-success ">Add New Blood</h1>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Blood Group</label>
                                            <div class="col-md-9">
                                                <select class="select select2-hidden-accessible" name="blood_group">
                                                       
                                                        <option value="O+">O+</option>
                                                        <option value="O-">O-</option>
                                                        <option value="AB+">AB+</option>
                                                        <option value="AB-">AB-</option>
                                                        <option value="A+">A+</option>
                                                        <option value="A-">A-</option>
                                                        <option value="B+">B+</option>
                                                        <option value="B-">B-</option>
                                                   
                                                </select>
                                           </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Quantity</label>
                                            <div class="col-md-9">
                                                <input type="number" name="quantity" required autocomplete="off"   class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Expire Date</label>
                                            <div class="col-md-9">
                                                <input type="date"  name="expire_date" required autocomplete="off"  placeholder="Phone" class="form-control">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="btn  btn-outline-success w-100">Add Blood</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>