<?php 
require_once("include/connection.inc.php");



?>
<?php 

// patient
    $patient = mysqli_query($con, "SELECT COUNT(patient_id) as total_patient FROM patient");
    $row_patient = mysqli_fetch_assoc($patient);
//   staff
    $staff = mysqli_query($con, "SELECT COUNT(staff_id) as total_staff FROM staff");
    $row_staff = mysqli_fetch_assoc($staff);
//   doctor
    $doctors = mysqli_query($con, "SELECT COUNT(staff_id) as total_doctors FROM staff WHERE staff_type = 1");
    $row_doctors = mysqli_fetch_assoc($doctors);
//   Narse
$narse = mysqli_query($con, "SELECT COUNT(staff_id) as total_narse FROM staff WHERE staff_type = 2");
$row_narse = mysqli_fetch_assoc($narse);
//   Employee
$employee = mysqli_query($con, "SELECT COUNT(staff_id) as total_employee FROM staff WHERE staff_type = 3");
$row_employee = mysqli_fetch_assoc($employee);

// feedback
$feedback = mysqli_query($con, "SELECT * FROM feedback ");
$row_feedback = mysqli_fetch_assoc($feedback);


?>
<!-- ppp -->
<?php 
		$for_active = "dashboard";
		require_once("include/header.inc.php"); ?>
 <!-- header section by faizullah firozi  -->


<!--    text title banner     -->
<h3 " class="col-lg-8  col-md-7 col-sm-7 col-xs-12" >
<marquee direction="left" > About Hospital News </marquee></h3>




	<!-- login -->
	<?php if(isset($_GET["login"])) { ?>
	<div class="wardak_alert alert-success text-danger text-center p-3 col-md-10 offset-1 h1"> Welcome Dear 		
					<span><b class= "text-dark"><?php if(isset($_SESSION)){ echo $_SESSION["first_name"]. " " . $_SESSION["last_name"]; } ?></b></span>
					! ښه راغلاست</div>
	<?php } ?>


 <div class="row">
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="dash-widget">
				<span class="dash-widget-bg1"><i class="fa fa-street-view" aria-hidden="true"></i></span>
				<div class="dash-widget-info text-right">
					<h3><?= $row_staff["total_staff"]; ?></h3>
					<span class="widget-title1">Total Staff <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="dash-widget">
				<span class="dash-widget-bg1"><i class="fa fa-user-md" aria-hidden="true"></i></span>
				<div class="dash-widget-info text-right">
					<h3><?= $row_doctors["total_doctors"]; ?></h3>
					<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="dash-widget">
				<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
				<div class="dash-widget-info text-right">
					<h3><?= $row_narse["total_narse"]; ?></h3>
					<span class="widget-title1">Narse <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>
			<div class="dash-widget">
				<span class="dash-widget-bg1"><i class="fa fa-user" aria-hidden="true"></i></span>
				<div class="dash-widget-info text-right">
					<h3><?= $row_employee["total_employee"]; ?></h3>
					<span class="widget-title1">Employee <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="dash-widget">
				<span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
				<div class="dash-widget-info text-right">
					<h3><?= $row_patient["total_patient"]; ?></h3>
					<span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="dash-widget">
				<span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
				<div class="dash-widget-info text-right">
				<h3><badge><?= $row_feedback["feedback_id"]; ?><badge></h3>
				<span class="badge bg-danger   text-light"><badge><?= $row_feedback["feedback_id"]; ?></badge></span>

					<span class="widget-title3">Total Feedback: <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>
		</div>
		<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
			<div class="dash-widget">
				<span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
				<div class="dash-widget-info text-right">
					<h3>618</h3>
					<span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
				</div>
			</div>


			
		</div>
	</div>
		

	<div class="row">
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<div class="card">
				<div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
					<div class="chart-title">
						<h4>Patient Total</h4>
						<span class="float-right"><i class="fa fa-caret-up" aria-hidden="true"></i> 15% Higher than Last Month</span>
					</div>	
					<canvas id="linegraph" width="752" height="376" class="chartjs-render-monitor" style="display: block; width: 752px; height: 376px;"></canvas>
				</div>
			</div>
		</div>
		<div class="col-12 col-md-6 col-lg-6 col-xl-6">
			<div class="card">
				<div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
					<div class="chart-title">
						<h4>Patients In</h4>
						<div class="float-right">
							<ul class="chat-user-total">
								<li><i class="fa fa-circle current-users" aria-hidden="true"></i>ICU</li>
								<li><i class="fa fa-circle old-users" aria-hidden="true"></i> OPD</li>
							</ul>
						</div>
					</div>	
					<canvas id="bargraph" width="752" height="376" class="chartjs-render-monitor" style="display: block; width: 752px; height: 376px;"></canvas>
				</div>
			</div>
		</div>
	</div>
<!-- footer section by faizullah firozi -->
<?php  require_once("include/footer.inc.php"); ?>