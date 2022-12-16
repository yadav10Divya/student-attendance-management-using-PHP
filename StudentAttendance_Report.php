<?php 
require("connection.php");
session_start();
$student_name =  $_SESSION['name'] ;

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
    width: 100%;
    margin-left:200px; 
    margin-top:15px;
    
}
td,th {
  text-align: center;
  padding: 10px;
}
th{background-color: #dcdcdc;opacity: 0.85;}

h4{
    background-color:pink;
    margin-top:10px;
    text-align:center;
    width: 500px; 
    height: 40px; 
    padding: 10px;
    margin-left:300px;
}
marquee{
    scrollamount:12;
    color:red;
    font-size:20px;
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
                                
                                
                                <li><a href="studentDashboard.php"><i class="fa fa-circle"></i>Student Dashboard</a></li>
                            </ul>
                        </li>
                       
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
                                    <form name="form1" method="POST" width="30%" style="margin-left: 40px; width: 400px;">
                               <div class="row">
                               <div class="col-md-3">
                                <button class="btn btn-primary" type="submit" name="show" style="margin-top:10px;margin-left: 320px;" >show</button>
                                </div>
                                </div>
                                <h3 style="background-color:pink;margin-top:20px;text-align:center;width: 840px; height: 45px; padding: 10px"><?php echo $student_name ; ?> Attendence Report</h3>
                              
                               
                                </form>
                                </div>
                             
                                <div >
                               
                                </div>

        
<table>

    <?php
        if(isset($_POST['show'])){
          
?>

<tr>
     
        
   <?php 
   $sql= "SELECT distinct(date) FROM attendance ORDER BY date";
   $query= mysqli_query($conn,$sql);
   $result = mysqli_fetch_all($query);
   //$a=array($result['date']. "");
   //$b=implode(" ",$a);
   //echo $b;
   //var_dump($result);
   

   for ($i = 0; $i < 1; $i++) {
    for($j = 0 ; $j < count($result);$j++){
        $tmdat =$result[$j][0];
        echo"<tr><th colspan='10'>".$tmdat."</th></tr>";
      
        ?>
      
         
   
<?php

        $sql2= "SELECT subject  FROM student where name = '$student_name' ";

        $query1=mysqli_query($conn,$sql2); 
        $row=mysqli_num_rows($query1);
        if($row){
           while($res=mysqli_fetch_array($query1))
           {
            $sub = $res['subject'];
            ?>
           
                
            <td><?php echo $sub ?></td>
           
           
        <?php
        
        ?>
            
            <?php

        $sql3= "SELECT attendence  FROM attendance where student_name = '$student_name' AND  subject = '$sub' AND date = '$tmdat' ";
       // echo $sql3;

        $query2=mysqli_query($conn,$sql3); 
        $row1=mysqli_num_rows($query2);
        
        if($row1){
        
           while($res1=mysqli_fetch_array($query2))
         
           {
                if($res1['attendence'] == 'Present'){
                    echo "<td>Present</td>";
                  
                }
               
            
           }
        }
        else{
            echo "<td>absent</td>";
          
        }
        echo "<tr></tr>";
        
        ?>
        
        <?php
        
   
           }
          
        }
    }
  
   
}

$sql4 = "SELECT count(DISTINCT(date)) as sub_count from attendance WHERE subject='$sub'";
//echo $sql4;
$query3=mysqli_query($conn,$sql4); 
$row2=mysqli_num_rows($query3);
if($row2 > 0){
while($res2=mysqli_fetch_array($query3))
{
    $conduct = $res2['sub_count'];
    //echo $conduct;
   
}
}
  

$sql5 = "select (count(subject)) as total from `attendance` where subject='$sub' AND student_name ='$student_name' ";

        $query4=mysqli_query($conn,$sql5); 
        $row3=mysqli_num_rows($query4);
        if($row3>0){
            while($res3=mysqli_fetch_array($query4))
            {
                $attend = $res3['total'];
                //echo $attend;
                
                $attend1 =$attend * 100;
                $attend2 = $attend1 / $conduct;
                $attend3 = round($attend2). "%";
               
            }
        }
        echo "<h4> $student_name  Attendance  is $attend3</h4>";
    }
    if($attend3 < 75){
        echo "<marquee>
        Your Attendance is less than 75%.
        </marquee>";
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



</body>

</html>


