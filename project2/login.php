<?php
   
if(isset($_POST["loginbtn"])) 
{
 include("dbconnect.php");
 $un =  $_POST["username"];
 $pwd = $_POST["Password"];

 $pwd = md5($_POST["Password"]);
 
 $qry = "SELECT * FROM user WHERE username= '$un' AND Password = '$pwd'";

$result =  mysqli_query($connect, $qry);
$row = mysqli_num_rows($result);
if($row>0)
{
   header("location:user.php");
}
else
{
   echo " Invalid Username or password";
}

}  

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>

</head>
<body>
 <div class="container">
    <div class="row">
        <div class="col-md-5 mx-auto">
            <div class="card-header bg-primary text-light">
                  <b> Login form </b>
            </div>
                <div class="body">
                    <form method="post">
                        
                            <div class="form-group">
                               <label> Username</label>
                               <input type="text" name="username" class="form-control">
                            </div>

                            <div class="form-group">
                               <label> Password </label>
                               <input type="Password" name="Password" class="form-control" >
                            </div>
                        
                            <div class="form-group">
                               <button class="btn btn-primary" type="submit" name="loginbtn"> Login </button>
                            </div>

                    </form>
                </div>
        </div>
    </div>
 </div>
</body>
 </html>