<?php 
require("connection.php");
session_start();
$staff_name =  $_SESSION['name'] ;
$todate =  $_SESSION['dateTo'];
$fromdate =  $_SESSION['dateFrom'];
$Subject =  $_SESSION['subject'];



 ?>
<?php

$con = mysqli_connect("localhost","root","","test");
$sql = "SELECT  subject FROM assign_subject 
   where staffName ='$staff_name ' ";

$all_subjects = mysqli_query($con,$sql);

?>

<?php

$con = mysqli_connect("localhost","root","","test");

$query = "SELECT subject FROM `assign_subject` where staffName ='$staff_name ' ";
$all_subject = mysqli_query($con,$query);
?>

<?php

$con = mysqli_connect("localhost","root","","test");

$query1 = "SELECT year  FROM `assign_subject` where staffName ='$staff_name ' ";
$all_year = mysqli_query($con,$query1);
?>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head runat="server">
    <title>Attendence_Report</title> 
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
    width: 70%;
    margin-left:300px;
    margin-top:15px;
    
}
td,th {
  text-align: center;
  padding: 15px;
}
th{background-color: #dcdcdc;opacity: 0.85;}


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
                        <label class="switch"><a href="#"><i id="sidebar-toggle"
                                    data-feather="align-left"></i></a></label>
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
                                <li><a href="staffLogin.php" onclick="preventBack()"><i data-feather="log-out"></i>Logout</a>
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
                                    <h3>Staff
                                        <small>Staff panel</small>
                                    </h3>
                                </div>
                                <div >
                                <form name="DateFilter" method="POST" width="30%" style="margin-left: 50px; width: 800px;">
                                <div class="row">
                                <div class="col-md-4">
                                <b>From:</b><br>
                                <input type="date" name="dateFrom" class="btn btn-primary" value="<?php echo date('Y-m-d'); ?>" />
                               </div>
                               <div class="col-md-4">
                                <b>To:</b><br>
                                <input type="date" name="dateTo" class="btn btn-primary" value="<?php echo date('Y-m-d'); ?>" />
                                </div>
                                
                               
                                    <div class="col-md-4">

                                    <label for="subject" class="mb-1"></label>
                                    <select name="subject" class="form-control" class="btn btn-primary" >
                                    <option>Select subject</option>
                                    <?php

                                    while ($subject = mysqli_fetch_array(
                                    $all_subjects,MYSQLI_ASSOC)):;
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
                               <hr>

                               <div class="row">
                               <div class="col-md-6">
                                <button class="btn btn-primary" type="submit" name="present" style="margin-top:15px;" >Present Student List</button>
                                </div>
                                <div class="col-md-6">
                                <button class="btn btn-primary" type="submit" name="absent" style="margin-top:15px;">Absent Student List</button>
                                </div>

                                </div>
                               <hr>
                                </form>
                                </div>


        
<table>

    <?php
        if(isset($_POST['present'])){
        
        $_SESSION['dateFrom'] = $_POST['dateFrom'];
        $_SESSION['dateTo']=  $_POST['dateTo'];
        $_SESSION['subject']=  $_POST['subject'];
      
      
?>

<tr>
     
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Subject</th>
        <th>Attendence</th>
        
        
    </tr>
<?php
       
        $sql = "SELECT * FROM `attendance` WHERE subject = '$Subject' AND date BETWEEN '" .$fromdate. "' AND  '" .$todate. "'";
      // echo $sql;

        $query1=mysqli_query($conn,$sql); 
        $row=mysqli_num_rows($query1);
        if($row){
           while($res=mysqli_fetch_array($query1))
           {
            ?>
            <tr>
                
                <td><?php echo $res['student_id']?></td>
                <td><?php echo $res['student_name']?></td>
                <td><?php echo $res['subject']?></td>
                <td><?php echo $res['attendence']?></td>
              
               
            </tr>
            <?php
           }
        }
    }
    ?>
</table>


<table>
   

<?php
        if(isset($_POST['absent'])){
        
        $_SESSION['dateFrom'] = $_POST['dateFrom'];
        $_SESSION['dateTo']=  $_POST['dateTo'];
        $_SESSION['subject']=  $_POST['subject'];
      
      
        ?>

        <tr>
             
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Subject</th>
                <th>Attendence</th>
                
                
            </tr>
        <?php

        $sql2 = "SELECT * FROM student WHERE subject = '$Subject' AND  name NOT IN (SELECT student_name FROM attendance WHERE  subject = '$Subject' AND date BETWEEN  '" . $fromdate . "' AND  '" . $todate . "')";

       // echo $sql2;

        $query2=mysqli_query($conn,$sql2); 
        $row=mysqli_num_rows($query2);
        if($row){
           while($res=mysqli_fetch_array($query2))
           {
            ?>
            <tr>
                
                <td><?php echo $res['id']?></td>
                <td><?php echo $res['name']?></td>
                <td><?php echo $res['subject']?></td>
                <td><?php echo "Absent"?></td>
              
               
            </tr>
            <?php
           }
        }
    } 
    ?>
</table>
                            </div>
                            
                            <!--div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                
                                    <li class="breadcrumb-item active">Subject Master</li>
                                </ol>
                            </div-->
                        </div>
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


