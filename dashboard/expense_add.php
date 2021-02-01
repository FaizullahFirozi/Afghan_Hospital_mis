<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="expense_add";


    if(isset($_POST["submit"]))
    {
        
            $expense_to = getValue($_POST["expense_to"]);
            $amount = getValue($_POST["amount"]);
            $currency = getValue($_POST["currency"]);
            $expense_date = getValue($_POST["expense_date"]);
          
           
                $expense = mysqli_query($con, "INSERT INTO expense VALUES(NULL, '$expense_to', $amount, '$currency', '$expense_date' )");
            if($expense)
                {
                    header("location:expense_list.php?add=done");
                } 
            else
                {
                    header("location:expense_add.php?error=notadd");
                }

         
    }



?>
<?php require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->

 <div class="row">
                    <div class="col-md-6 offset-3 bg-info ">
                        
                                                               
 <!-- error -->
<?php if(isset($_GET["error"])) { ?>
                <h1 class="wardak_alert alert-danger text-center p-2 col-md-6 offset-3 "> مصرف اضافه نه شوه بیا کوښښ وکړئ </h1>
                <?php } ?>

                        <div class="card-box mt-4">
                            <h1 class="card-title text-success ">Add New Expense</h1>
                            <form method="post">
                                <div class="row">
                                    <div class="col-md-12 ">
                                        
                                       
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Expense To</label>
                                            <div class="col-md-9">
                                                <input type="text" name="expense_to" required autocomplete="off"   class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Amount</label>
                                            <div class="col-md-9">
                                                <input type="text" name="amount" required autocomplete="off"   class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Currency</label>
                                            <div class="col-md-9">
                                                <select class="select select2-hidden-accessible" name="currency">
                                                       
                                                        <option value="AFN">AFN</option>
                                                        <option value="USD">USD</option>
                                                   
                                                </select>
                                           </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-3 col-form-label h4">Expense Date</label>
                                            <div class="col-md-9">
                                                <input type="date" name="expense_date" required autocomplete="off"  placeholder="Phone" class="form-control">
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                                <div>
                                    <button type="submit" name="submit" class="btn  btn-outline-success w-100">Add Expense</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>