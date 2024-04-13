<?php

if(isset($_POST["registerbtn"]))
{

include("dbconnect.php");

$fn = $_POST["fullname"];
$eid = $_POST["email"];
$pwd = md5($_POST["password"]);
$mob = $_POST["mobile"];

$qry = "INSERT INTO register(id, fullname, email, password, mobile) VALUES (NULL,'$fn','$eid','$pwd','$mob')";
 
$result =  mysqli_query($connect, $qry);

if($result)
{
   echo "Registration success";
}
else
{
   echo "failed to Register";
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
 			   <div class="card-header bg-success text-light">
 			      <b> Registration form </b>
 				</div>
 				<div class="body">
 					<form method="post">
 						<div class="form-group">
 							<label> Fullname </label> 
 							<input type="text" name="fullname" class="form-control"  >
 						</div>

 					   <div class="form-group">
 							<label> Email </label>
 							<input type="email" name="email" class="form-control">
 						</div>

 						<div class="form-group">
 							<label> Password </label>
 							<input type="Password" name="password" class="form-control" >
 						</div>

 						<div class="form-group">
 							<label> Mobile No </label>
 							<input type="tel" name="mobile" class="form-control" >
 						</div>

 						<div class="form-group">
                     <button class="btn btn-success" type="submit" name="registerbtn"> Register </button>
 						</div>
 						 
 					</form>
 				</div>
 			</div>
      </div>
   </div>
</body>
</html>
