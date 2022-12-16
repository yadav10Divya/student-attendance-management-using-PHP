<?php 
require("connection.php");
?>
<?php

	$con = mysqli_connect("localhost","root","","test");

	$sql = "SELECT * FROM `branch`";
	$all_branches = mysqli_query($con,$sql);

?>
<?php

$con = mysqli_connect("localhost","root","","test");

$query = "SELECT id,subject FROM `subject`";
$all_subject = mysqli_query($con,$query);
?>
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="pixelstrap">
    
        <title>Student form</title>
    
        <!-- Google font-->
        <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
        <!-- Font Awesome-->
        <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css">
    
        <!-- Flag icon-->
        <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
    
        <!-- ico-font-->
        <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
    
        <!-- Prism css-->
        <link rel="stylesheet" type="text/css" href="assets/css/prism.css">
    
        <!-- Chartist css -->
        <link rel="stylesheet" type="text/css" href="assets/css/chartist.css">
    
        <!-- Bootstrap css-->
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
    
        <!-- App css-->
        <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
       
        <!--Icons-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    
    <body>
    
    <!-- page-wrapper Start-->
    <div class="page-wrapper">
    
        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none">
                    <div class="logo-wrapper"><a href="home.html"><img class="blur-up lazyloaded" alt=""></a></div>
                </div>
                <div class="mobile-sidebar">
                    <div class="media-body text-right switch-sm">
                        <label class="switch"><a href="#"><i id="sidebar-toggle" data-feather="align-left"></i></a></label>
                    </div>
                </div>
                <div class="nav-right col">
                    <ul class="nav-menus">
                        <li>
                            
                        <li class="onhover-dropdown">
                            <div class="media align-items-center"><img class="align-self-center pull-right img-60 rounded-circle blur-up lazyloaded" src="logo.jpg" alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                
                                <li><a href="login.php"><i data-feather="log-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="d-lg-none mobile-toggle pull-right"><i data-feather="more-horizontal"></i></div>
                </div>
            </div>
        </div>
        <!-- Page Header Ends -->
    
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
    
            <!-- Page Sidebar Start-->
            <div class="page-sidebar">
                <div class="main-header-left d-none d-lg-block">
                    <div class="logo-wrapper"><a href="/"><img class="blur-up lazyloaded" alt=""></a></div>
                </div>
                <div class="sidebar custom-scrollbar">
                  
                    <ul class="sidebar-menu">
                    <li><a class="sidebar-header" href="Dashboard.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i> <span>Master</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <!--li><a href="branch.php"><i class="fa fa-circle"></i>Branch Master</a></li>
                                <li><a href="staff.php"><i class="fa fa-circle"></i>Staff Master</a></li-->
                                <li><a href="student.php"><i class="fa fa-circle"></i>Student Master</a></li>
                               
                            </ul>
                        </li>
                      
                
                    </ul>
                </div>
            </div>
            <!-- Page Sidebar Ends-->
    
            <!-- Right sidebar Start-->
        
            <!-- Right sidebar Ends-->
    
            <div class="page-body">
    
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Student Registration
                                        <small>Student panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                
                                    <li class="breadcrumb-item active">Student Registration</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid Ends-->
    
                <!-- Container-fluid starts-->
                <div class="container-fluid border border-white">
                    <form class="needs-validation"  method="POST">
                  
                        <div class="row">
                        <div style="width:100%"><hr /></div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name" class="mb-1"></label>
								<input class="form-control" id="name" style="margin: auto" name="name" type="text" placeholder="Enter Name" required>
                            </div>
                       
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
								<label for="password" class="mb-1"></label>
								<input class="form-control" id="password" style="margin: auto" name="password" type="password" placeholder="Enter Password " required>
								
							</div>
                           </div>
                       
                    </div>
                    <div class="row">

                    <div class="col-md-6">
							<div class="form-group">
								<label for="mobileno" class="mb-1"></label>
								<input class="form-control" id="mobileno" style="margin: auto" name="mobileno" placeholder="Enter MobileNo" type="text" required>
								
							</div>
                    </div>
                    <div class="col-md-6">
                            <div class="form-group">
								<label for="address" class="mb-1"></label>
								<input class="form-control" id="address" style="margin: auto" name="address" type="text" placeholder="Enter Address " required>
								
							</div>
                        </div>
                        
                        
                    </div>
					<div class="row">
                    <div class="col-md-6">
                    <div class="form-group">
					<label for="Branch" class="mb-1"></label>
                    <select name="Branch" class="form-control" style="margin: auto" >
                       <option>Select Branch</option>
                        <?php

                        while ($branch = mysqli_fetch_array(
                        $all_branches,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $branch["Branch"];

                        ?>">
                        <?php echo $branch["Branch"];

                        ?>
                        </option>
                        <?php
                        endwhile;

                        ?>
		            </select>
								
							</div>

                        </div>

                        <div class="col-md-6">
                    <div class="form-group">
					<label for="subject" class="mb-1"></label>
                    <select name="subject" class="form-control" style="margin: auto" >
                       <option>Select Subject</option>
                        <?php

                        while ($subject= mysqli_fetch_array(
                        $all_subject,MYSQLI_ASSOC)):;
                        ?>
                        <option value="<?php echo $subject["subject"];

                        ?>">
                        <?php echo $subject["subject"];

                        ?>
                        </option>
                        <?php
                        endwhile; 

                        ?>
		            </select>
								
							</div>

                        </div>
						
					</div>

                    <div class="row">

                    <div class="col-md-6">
							<label for="year" class="mb-1"></label>
								<!--input class="form-control" id="year" style="margin: auto" name="year" type="text" placeholder="Select year" required--> 
                                <select class="form-control" id="year" style="margin: auto" name="year">
                                <option value="">Select Year</option>
                                <option>1st Year</option>
                                <option>2nd Year</option>
                                <option>3rd Year</option>
                                <option>4th Year</option>

                            </select>
						</div>
                    </div>
                    <br>
                    
					<div class="row">
						<div class="col-md-4"></div>
						<div class="col-md-4">
								<button class="btn btn-primary" type="submit" name="submit">Register </button>
						</div>
						<div class="col-md-4"></div>
					</div>
                    
                </div>
               
            </form>
            </div>
    
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 footer-copyright">
                            <p class="mb-0">Copyright 2022 ©  </p>
                        </div>
                        <div class="col-md-6">
                            <p class="pull-right mb-0">Annasaheb Dange college<i class="fa "></i></p>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- footer end-->
        </div>
    
    </div>
    
    <!-- latest jquery-->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    
    <!-- Bootstrap js-->
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.js'"></script>
    
    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>
    
    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>
    
    <!--chartist js-->
    <script src="assets/js/chart/chartist/chartist.js"></script>
    
    <!--chartjs js-->
    <script src="assets/js/chart/chartjs/chart.min.js"></script>
    
    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>
    
    <!--copycode js-->
    <script src="assets/js/prism/prism.min.js'"></script>
    <script src="assets/js/clipboard/clipboard.min.js"></script>
    <script src="assets/js/custom-card/custom-card.js"></script>
    
    <!--counter js-->
    <script src="assets/js/counter/jquery.waypoints.min.js"></script>
    <script src="assets/js/counter/jquery.counterup.min.js"></script>
    <script src="assets/js/counter/counter-custom.js"></script>
    
    <!--peity chart js-->
    <script src="assets/js/chart/peity-chart/peity.jquery.js"></script>
    
    <!--sparkline chart js-->
    <script src="assets/js/chart/sparkline/sparkline.js"></script>
    
    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>
    
    <!--dashboard custom js-->
    <script src="assets/js/dashboard/default.js"></script>
    
    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>
    
    <!--height equal js-->
    <script src="assets/js/height-equal.js"></script>
    
    <!-- lazyload js-->
    <script src="assets/js/lazysizes.min.js"></script>
    
    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>

        <?php
        if(isset($_POST['submit'])){
        $query = "INSERT INTO `student`( `name`, `password`,`address`, `mobileNo`, `year`, `branch` ,`subject`) VALUES ('$_POST[name]','$_POST[password]','$_POST[address]','$_POST[mobileno]','$_POST[year]','$_POST[Branch]','$_POST[subject]')";

        $result = mysqli_query($conn, $query);

        }

        ?>

    </body>
    </html>


