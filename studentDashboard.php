<?php 
require("connection.php");
session_start();
$student_name =  $_SESSION['name'] ;
$Subject =   $_SESSION['subject'];
$todate =    $_SESSION['dateTo'];
$fromdate =  $_SESSION['dateFrom'];

 ?>


<?php

$con = mysqli_connect("localhost","root","","test");

$query = "SELECT id,subject FROM `subject`";
$all_subject = mysqli_query($con,$query);
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <title>Student_Dashboard</title> 
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description"
        content="Multikart admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
    <meta name="keywords"
        content="admin template, Multikart admin template, dashboard template, flat admin template, responsive admin template, web app" />
    <meta name="author" content="pixelstrap" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet" />

    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="assets/css/fontawesome.css" />

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css" />
    <link href="../Styles/SampleStyleSheet.css" rel="stylesheet" />
    <!-- jsgrid css-->
    <link rel="stylesheet" type="text/css" href="assets/css/jsgrid.css" />

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css" />
    <script type="text/javascript" src="//cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>

    <script type="text/javascript"
        src="//cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

       

    <style>
        input,
        button,
        select,
        optgroup,
        textarea {
            margin: 0 0 0 20px;
        }

        table, th, td {
  border: 2px solid;
  
}
table{
    width: 40%;
    margin-left:280px;
    margin-top:15px;
    
}
td,th {
  text-align: center;
  padding: 15px;
}
th{background-color: #dcdcdc;opacity: 0.85;}

h2{
    text-align: center;
    background-color: #dcdcdc;
    font-size : 25px;
    margin:30px;
    padding:10px;
    font-style:italic;
    color:red;
   
}


    </style>


</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    
    <!-- page-wrapper Start-->
    <div class="page-wrapper">

   

        <!-- Page Header Start-->
        <div class="page-main-header">
            <div class="main-header-right row">
                <div class="main-header-left d-lg-none">
                    <div class="logo-wrapper">
                        <a href="Index.html">
                            <img src="" alt=""></a>
                    </div>
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
                            <div class="media align-items-center">
                                <img class="align-self-center pull-right img-60 rounded-circle" src="logo.jpg"
                                    alt="header-user">
                                <div class="dotted-animation"><span class="animate-circle"></span><span
                                        class="main-circle"></span></div>
                            </div>
                            <ul class="profile-dropdown onhover-show-div p-20">
                                <li><a href="studentLogin.php" onclick="preventBack()"><i data-feather="log-out"></i>Logout</a>
                                </li>
                            </ul>
                        </li>
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
                    <div class="logo-wrapper">
                        <a href="index.html">
                            <img class="blur-up lazyloaded" alt=""></a>
                    </div>
                </div>

                <div class="sidebar custom-scrollbar">
                    <ul class="sidebar-menu">
                        <li><a class="sidebar-header" href="index.html"><i data-feather="home"></i><span>Dashboard</span></a></li>
                        <li><a class="sidebar-header" href="#"><i data-feather="box"></i><span>Master</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                               
                            <li><a href="StudentAttendance_Report.php"><i class="fa fa-circle"></i>Student Attendance Report</a></li>
                            </ul>
                        </li>
                        <!--li><a class="sidebar-header" href="MonthlyDashboard.aspx"><i data-feather="box"></i><span>Monthly_Reporting</span><i class="fa fa-angle-right pull-right"></i></a>
                            <ul class="sidebar-submenu">
                                <li><a href="chart.aspx"><i class="fa fa-circle"></i>Graphical Report</a></li>
                                <li><a href="DayToDayReport.aspx"><i class="fa fa-circle"></i>Tabular Report</a></li>
                            </ul>
                        </li-->
                    </ul>
                </div>
                
            </div>
            <!-- Page Sidebar Ends-->

           
            <div class="page-body">
           
                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Student 
                                        <small>Student panel</small>
                                    </h3>
                                </div>
                                <h4>Welcome <?php echo $student_name; ?></h4>
                              
                            </div>
                            
                            
                        </div>
                    </div>
                    <form class="needs-validation" name="form1" method="POST" style="margin: auto; width: 1100px;">
                                <div class="row">
                                <div class="col-md-3">
                    <div class="form-group">
					<label for="subject"></label>
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

                        <div class="col-md-3">
                                 <b>From:</b><br>
                                <input type="date" name="dateFrom" class="btn btn-primary" value="<?php echo date('Y-m-d'); ?>" />
                               </div>
                               <div class="col-md-3">
                                <b>To:</b><br>
                                <input type="date" name="dateTo" class="btn btn-primary" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                            <div class="col-md-2">
                                <button class="btn btn-primary" type="submit" name="show" style="margin-top:20px;">Show</button>
                                </div>
                                </div>
                               
                           

                            <table>
   
    <?php

    if(isset($_POST['show'])){
    $_SESSION['subject'] = $_POST['subject'];
    $_SESSION['dateFrom'] = $_POST['dateFrom'];
    $_SESSION['dateTo']=  $_POST['dateTo'];

   $sql = "SELECT count(DISTINCT(date)) as sub_count from attendance WHERE subject='$Subject' AND date BETWEEN '" . ($fromdate) . "' AND  '" . ($todate) . "'";
       // $sql="select count((subject)) as sub_count from  `attendance` WHERE subject='$Subject' AND date BETWEEN  '" . ($fromdate) . "' AND  '" . ($todate) . "'";
        
        $query1=mysqli_query($conn,$sql); 
        $row=mysqli_num_rows($query1);
        if($row > 0){
            while($res=mysqli_fetch_array($query1))
            {
                $conduct = $res['sub_count'];
                //echo $conduct;
               
        }
    }
    if(($conduct)!=0){
       
        $sql2 = "select (count(subject)) as total from `attendance` where subject='$Subject' AND student_name ='$student_name' AND  date BETWEEN  '" . $fromdate . "' AND  '" . $todate . "'";

        $query2=mysqli_query($conn,$sql2); 
        $row1=mysqli_num_rows($query2);
        if($row1>0){
            while($res1=mysqli_fetch_array($query2))
            {
                $attend = $res1['total'];
                
                $attend1 =$attend * 100;
                $attend3 = $attend1 / $conduct;
                $attend2 = round($attend3);
               
            }
        }
        
   
       
?>

        <tr>
        
        <th>Subject</th>
        <th>Attendence in percent</th>
        <th>Attendent lecture out of conducted</th>
       
        </tr>
        <?php

       $query3=mysqli_query($conn,$sql2); 
        $row=mysqli_num_rows($query3);
        if($row){
           while($res=mysqli_fetch_array($query3))
           {
            ?>
            <tr>
               
                <td><?php echo $Subject; ?></td>
                <td><?php echo $attend2 . "%"; ?></td>
                <td><?php echo $attend . "/" . $conduct ; ?></td>
               
            </tr>
            <?php
           } 
        }
    }
    else{
        $conduct = 1;

        $sql2 = "select (count(subject)) as total from `attendance` where subject='$Subject' AND student_name ='$student_name' AND date BETWEEN  '" . $fromdate . "' AND  '" . $todate . "'";
        

        $query2=mysqli_query($conn,$sql2); 
        $row1=mysqli_num_rows($query2);
        if($row1>0){
            while($res1=mysqli_fetch_array($query2))
            {
                $attend = $res1['total'] ;

                $attend1 =$attend * 100;
                $attend2 = $attend1 / $conduct;
               
            }
        }
        
       
?>

        <tr>
        
        <th>Subject</th>
        <th>Attendence in percent</th>
        <th>Attendent lecture out of conducted</th>
        </tr>
        <?php

       $query3=mysqli_query($conn,$sql2); 
        $row=mysqli_num_rows($query3);
        if($row){
           while($res=mysqli_fetch_array($query3))
           {
            ?>
            <tr>
               
                <td><?php echo $Subject; ?></td>
                <td><?php echo $attend2 . "%"; ?></td>
                <td><?php echo $attend . "/" . $conduct ; ?></td>
               
            </tr>
            <?php
           }
        }
      

    }
    
   // if($attend <=75){
       // echo "<h2>" .$student_name. " your attendance is less than 75%..!</h2>" ;
    //}

    }

        ?>

     

</form>
</table>


     </div>
    </div>
    
 
</div>
            <!-- footer start-->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-xs-12 footer-copyright">
                            <p class="mb-0">Copyright &copy 2022 </p>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <p class="pull-right mb-0">Annasaheb Dange college . All rights reserved.</p>
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
    <script src="assets/js/bootstrap.js"></script>

    <!-- feather icon js-->
    <script src="assets/js/icons/feather-icon/feather.min.js"></script>
    <script src="assets/js/icons/feather-icon/feather-icon.js"></script>

    <!-- Sidebar jquery-->
    <script src="assets/js/sidebar-menu.js"></script>

    <!--Customizer admin-->
    <script src="assets/js/admin-customizer.js"></script>

    <!-- Jsgrid js-->
    <script src="assets/js/jsgrid/jsgrid.min.js"></script>
    <script src="assets/js/jsgrid/griddata-manage-product.js"></script>
    <script src="assets/js/jsgrid/jsgrid-manage-product.js"></script>

    <!--right sidebar js-->
    <script src="assets/js/chat-menu.js"></script>

    <!--script admin-->
    <script src="assets/js/admin-script.js"></script>


    <!--checkbox-->

  
</body>

</html>


      
 