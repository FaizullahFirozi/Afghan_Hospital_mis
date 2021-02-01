<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	
   
   
    <!-- ckeditor faizullah firozi wardak -->
    <script src="assets/ckeditor/ckeditor.js"></script>
    
    <!-- link for alert faizullah firozi -->
    
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="#" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
			
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
												<p class="noti-time"><span class="notification-time">4 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
												<p class="noti-time"><span class="notification-time">6 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">L</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
												<p class="noti-time"><span class="notification-time">8 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">G</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
												<p class="noti-time"><span class="notification-time">12 mins ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
											<span class="avatar">V</span>
											<div class="media-body">
												<p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
												<p class="noti-time"><span class="notification-time">2 days ago</span></p>
											</div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
						<span><b><?php if(isset($_SESSION)){ echo $_SESSION["first_name"]. " " . $_SESSION["last_name"]; } ?></b></span>
                    </a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="#">My Profile</a>
						<a class="dropdown-item" href="#">Edit Profile</a>
						<a class="dropdown-item" href="change_password.php">Change Password</a>
						<a class="dropdown-item" href="logout.php">Logout</a>
					</div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="login.html">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="<?php if($for_active == 'dashboard' ){ echo 'active'; }else "jfdls"; ?>" >
                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						
						<li  class="submenu">
							<a href="#"><i class="fa fa-cog"></i> <span> Settings </span> <span class="menu-arrow"></span></a>
							<ul style="display: <?php if($for_active == "about_hospital" || $for_active == 'change_password' || $for_active == 'account_management' ){ echo "block";} else { echo "none"; } ?>" >
								<li class="<?php if($for_active == 'about_hospital' ){ echo 'active'; }else "jfdls"; ?>" ><a href="about_hospital.php">About Hospital</a></li>
								<li class="<?php if($for_active == 'change_password' ){ echo 'active'; }else "jfdls"; ?>" ><a href="change_password.php">Change Password</a></li>
								<li class="<?php if($for_active == 'account_management' ){ echo 'active'; }else "jfdls"; ?>" ><a href="account_management.php">Account Mamagement</a></li>
								<!-- <li class="<?php// if($for_active == "Users"){ echo "active";} ?>"><a href="Users.php">Users</a></li>
								<li class="<?php //if($for_active == "partner"){ echo "active";} ?>"><a href="partner.php">Partner</a></li> -->
							<!-- <li><a href="attendance.html">Report</a></li> -->
							</ul>
						
						</li>

						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Website </span> <span class="menu-arrow"></span></a>
							<ul style="display: <?php if($for_active == "news_add" || $for_active == 'news_list' || $for_active == 'advertisement_list' || $for_active == 'history_list' || $for_active == 'services_list' || $for_active == 'feedback_list'  || $for_active == 'expense_list' || $for_active == 'student_practice_list'){ echo "block";} else { echo "none"; } ?>" >
								<li class="<?php if($for_active == 'news_add' ){ echo 'active'; }else "jfdls"; ?>" ><a href="news_add.php">News Add</a></li>
								<li class="<?php if($for_active == 'news_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="news_list.php">News List</a></li>
								<li class="<?php if($for_active == 'advertisement_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="advertisement_list.php">Advertisement</a></li>
								<li class="<?php if($for_active == 'history_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="history_list.php">History</a></li>
								<li class="<?php if($for_active == 'services_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="services_list.php">Services</a></li>
								<li class="<?php if($for_active == 'feedback_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="feedback_list.php">feedback</a></li>
								<li class="<?php if($for_active == 'student_practice_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="student_practice_list.php">Student Practice</a></li>
								<li class="<?php if($for_active == 'expense_list' ){ echo 'active'; }else "jfdls"; ?>" ><a href="expense_list.php">Expense</a></li>
							</ul>
						</li>

						
                        <li class="<?php if($for_active == "department_list"){ echo "active";} ?>">
                            <a href="department_list.php"><i class="fa fa-hospital-o"></i> <span>Departments</span></a>
                        </li>

						<li class="submenu">
							<a href="#"><i class="fa fa-wheelchair"></i> <span> Patient </span> <span class="menu-arrow"></span></a>
							<ul style="display: <?php if($for_active == "patient_add" || $for_active == "patient_list" || $for_active == "patient_test_add" || $for_active == "patient_test_list" || $for_active == "test_list" ){ echo "block";} else { echo "none"; } ?>" >
								<li class="<?php if($for_active == "patient_add"){ echo "active";} ?>"><a href="patient_add.php">Patient Add</a></li>
								<li class="<?php if($for_active == "patient_list"){ echo "active";} ?>"><a href="patient_list.php">Patient List</a></li>
								<li class="<?php if($for_active == "patient_test_add"){ echo "active";} ?>"><a href="patient_test_add.php">Patient Test Add</a></li>
								<li class="<?php if($for_active == "patient_test_list"){ echo "active";} ?>"><a href="patient_test_list.php">Patient Test list</a></li>
								<li class="<?php if($for_active == "test_list"){ echo "active";} ?>"><a href="test_list.php">Test</a></li>
							</ul>
						</li>
                        
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
							<ul style="display: <?php if($for_active == "doctor" || $for_active == "staff_add" || $for_active == "staff_list" || $for_active == "staff_attendance_add" || $for_active == "staff_attendance_list" || $for_active == "staff_overtime_add" || $for_active == "staff_overtime_list" || $for_active == "staff_salary_list" ){ echo "block";} else { echo "none"; } ?>" >
								<li class="<?php if($for_active == "doctor"){ echo "active";} ?>"><a href="doctor.php">Doctor</a></li>
								<li class="<?php if($for_active == "staff_add"){ echo "active";} ?>"><a href="staff_add.php">Staff Add</a></li>
								<li class="<?php if($for_active == "staff_list"){ echo "active";} ?>"><a href="staff_list.php">Staff List</a></li>
								<li class="<?php if($for_active == "staff_attendance_add"){ echo "active";} ?>"><a href="staff_attendance_add.php">Staff Attendance Add</a></li>
								<li class="<?php if($for_active == "staff_attendance_list"){ echo "active";} ?>"><a href="staff_attendance_list.php">Staff Attendance List</a></li>
								<li class="<?php if($for_active == "staff_overtime_add"){ echo "active";} ?>"><a href="staff_overtime_add.php">Staff Overtime Add</a></li>
								<li class="<?php if($for_active == "staff_overtime_list"){ echo "active";} ?>"><a href="staff_overtime_list.php">Staff Overtime List</a></li>
								<li class="<?php if($for_active == "staff_salary_list"){ echo "active";} ?>"><a href="staff_salary_list.php">Staff Salary</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Blood Bank </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							<li class="<?php if($for_active == "blood_add"){ echo "active";} ?>"><a href="blood_add.php">Blood Add</a></li>
							<li class="<?php if($for_active == "docblood_listtor"){ echo "active";} ?>"><a href="blood_list.php">Blood List</a></li>
							</ul>
						</li>
                        
                        
						<li class="submenu">
							<a href="#"><i class="fa fa-dribbble "></i> <span> Pharmacy </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							<li><a href="#">New Pharmacy</a></li>
							<li><a href="#">Pharmacy List</a></li>
							<li><a href="#">Pharmacy Document</a></li>
							</ul>
						</li>
						
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Finance </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							<li><a href="#">New Finance</a></li>
							<li><a href="#">Finance List</a></li>
							<li><a href="#">Finance Document</a></li>
							</ul>
						</li>
						<li class="submenu">
							<a href="#"><i class="fa fa-amazon"></i> <span> Laboratoar </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							<li><a href="#">New Pharmacy</a></li>
							<li><a href="#">Pharmacy List</a></li>
							<li><a href="#">Pharmacy Document</a></li>
							</ul>
						</li>
                        
						<li class="submenu">
							<a href="#"><i class="fa fa-user"></i> <span> Surgary </span> <span class="menu-arrow"></span></a>
							<ul style="display: none;">
							<li><a href="#">New Surgary</a></li>
							<li><a href="#">Surgery List</a></li>
							<li><a href="#">New Patient Surgary</a></li>
							<li><a href="#">Patient Surgary List</a></li>
							</ul>
						</li>
                        
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">

            <!-- content section by faizullah firozi  -->
