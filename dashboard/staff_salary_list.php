<?php ob_start(); ?>
<?php require_once("include/connection.inc.php"); ?>
<?php 
        $for_active ="staff_salary_list";
        require_once("include/header.inc.php"); 
                               
$salary = mysqli_query($con, "SELECT SUM(gross_salary) as total FROM staff ");
$row_salary = mysqli_fetch_assoc($salary);

?>


<h1>Total Employee Salary : <span class="text-success display-1"><?= $row_salary["total"]; ?> </span></h1>

<!-- footer section by faizullah firozi -->
<?php require_once("include/footer.inc.php"); ?>