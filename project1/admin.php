<?php

if(isset($_POST["noticebtn"]))
{
include("dbconnect.php");
$notice = $_POST["noticebtn"];

$qry = "INSERT INTO 'notice'('notice') VALUES ('$notice')";
$result = mysqli_query($connect, $qry);
if($result)
{
    echo " Notice Added Successfully";
}
else{
	echo "Something Went Wrong";
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
	 <h2> Welcome Admin </h2>
	<div class="container">
		<div class="row">
			<div class="col-md-6 mx-auto">
				<form method="post">
				<div class="form-group">
					<label> Add Notice</label>
					<textarea name="notice" placeholder="Enter notice here.." class="form-control"></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-primary" name="noticebtn"> Add </button>
			</form>
			</div>
		</div>
	</div>
</body>
</html>