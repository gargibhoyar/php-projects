<?php
session_start();
if(isset($_SESSION["uid"]))
{
	header("location:user.php");
}
if(isset($_POST["login.php"]))

{
include("dbconnect.php");
$eid = $_POST["email"];
$pwd = $_POST["password"];

if ($eid == "admin" && $pwd == "admin") 
{
	 header("location:admin.php");
}

$pwd = md5($_POST["password"]);


$qry = "SELECT * FROM 'register' WHERE email = '$eid' AND pasword = '$pwd'";

$result = mysqli_query($connect, $qry);

$row = mysqli_num_rows($result);
if($row>0)
{
    $data = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION["uid"] = $data["id"];

	header("location:admin.php");
}
else
{
	echo "Invalid Email or Password";
}






}
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"></script>

	<title></title>

</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-5 mx-auto">
			<div class="card">
				<div class="card-header bg-primary text-light">
					<b> Login form </b>
				</div>
			<div class="card-body">
				<form method="post">
                    <div class="form-group">
                    	<label> Email </label>
                    	<input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                    	<label> Password </label>
                    	<input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                    	<button class="btn btn-primary" type="submit" name="Loginbtn"> Login</button>
                    </div>
                    <p>Don't have an account? <a href="register.php"> Sign Up </a> </p>
                </form>
                </div>
            </div>    
        </div>
    </div>
</div>






</body>
</html>