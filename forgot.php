<?php
require("connection.php");
session_start();


?>
<!DOCTYPE html>
<title>Staff forgot pass</title>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



<!------ Include the above in your HEAD tag ---------->
    <style>
              body {
  margin: 0;
  padding: 0;
  background-color: #17a2b8;
  height: 100vh;
}
        .register{
    background: -webkit-linear-gradient(left, #3931af, #00c6ff);
    margin-top: 10%;
    padding: 3%;
}
.register-left{
    text-align: center;
    color: #fff;
    margin-top: 4%;
}
.register-left input{
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    width: 80%;
    background: #f8f9fa;
    font-weight: bold;
    color: #383d41;
    margin-top: 15%;
    margin-bottom: 3%;
    cursor: pointer;
}
.register-right{
    background: #f8f9fa;
    border-top-left-radius: 10% 50%;
    border-bottom-left-radius: 10% 50%;
}
.register-left img{
    margin-top: 15%;
    margin-bottom: 5%;
    width: 25%;
    -webkit-animation: mover 2s infinite  alternate;
    animation: mover 1s infinite  alternate;
}
@-webkit-keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
@keyframes mover {
    0% { transform: translateY(0); }
    100% { transform: translateY(-20px); }
}
.register-left p{
    font-weight: lighter;
    padding: 12%;
    margin-top: -9%;
}
.register .register-form{
    padding: 10%;
    margin-top: 7%;
}
.btnRegister{
    
    margin-top: 10%;
    border: none;
    border-radius: 1.5rem;
    padding: 2%;
    background: #0062cc;
    color: #fff;
    font-weight: 600;
    width: 50%;
    cursor: pointer;
    margin-left:50px;
}
.register .nav-tabs{
    margin-top: 3%;
    border: none;
    background: #0062cc;
    border-radius: 1.5rem;
    width: 28%;
    float: right;
}
.register .nav-tabs .nav-link{
    padding: 2%;
    height: 34px;
    font-weight: 600;
    color: #fff;
    border-top-right-radius: 1.5rem;
    border-bottom-right-radius: 1.5rem;
}
.register .nav-tabs .nav-link:hover{
    border: none;
}
.register .nav-tabs .nav-link.active{
    width: 100px;
    color: #0062cc;
    border: 2px solid #0062cc;
    border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}
.register-heading{
    text-align: center;
    margin-top: 8%;
    margin-bottom: -15%;
    color: #495057;
}


    </style>
    
<body>
   
<div class="container register">
    
            <div class="row">
                <div class="col-md-3 register-left">
                   <p></p>
                    <h2>Welcome To</h2>
                    <h4>Recover staff password</h4>

                </div>
                <div class="col-md-9 register-right">

                    <div class="tab-content" id="myTabContent">

                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            
                            <h3 class="register-heading">Forgot Password</h3>
                            <form method="POST"  name="form1" onsubmit="return validate()">
                                <div class="row register-form">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-8">
                                        <div class="form-group">
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Username" required>
                                        </div>
                                        <div class="form-group">
                                        <input type="text" class="form-control" id="pass" name="pass" placeholder="New Password" required>
                                        </div>
                                        <div class="form-group">
                                        <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="password" required>
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary" name="recover">Recover Password</button>
                                            <a href = "staffLogin.php" class="btn btn-primary" name="signin">Sign in</a>
                                             
                                        </div>
                                    </div>
                                    <div class="col-md-2"></div>
                                </div>
                            </form>

                        </div>
                    </div>

                </div>


                    <?php
                    if(isset($_POST['recover'])) {
                    $pass = $_POST['password'];
                    $user = $_POST['name'];

                    $query = "UPDATE staff SET password = '$pass' WHERE name = '$user'";   
                    //echo $query; 
                    $sql = mysqli_query($conn,$query);

                    if($sql) {
                        echo "<script>alert('Password Recovered Successfully');</script>";
                        
                    }
                    else {
                        echo "<script>alert('Please Enter Valid Username');</script>";
                    }
                    }
                    ?>


<script type="text/javascript" language="javascript">
function validate(){
    var isValid = true;
if(!(document.form1.pass.value === document.form1.password.value)){
    alert("Passwords and Confirm Password should be same.");
    isValid = false;
}

return isValid;
}
</script>