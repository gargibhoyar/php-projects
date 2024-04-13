<?php
session_start();
if(!isset($_SESSION["uid"]))
{
	header("location:login.php");
}

include("dbconnect.php");

$qry = "SELECT * FROM `notice` order by id desc limit 5";
$result = mysqli_query($connect, $qry);
$row = mysqli_num_rows($result);


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
    <style>
         .card-body{
         	padding-left: 0;
         }
         ul li {
             line-height:40px;
             font-size: 20px;
         }
    </style>
	<title></title>
</head>
<body>
<h2> Welcome User </h2>
  <div class="container-fluid">
  	<div class="row">
  		<div class="col-md-6">
  		  <div class="card">
  		  	<div class="card-header bg-dark text-light"> Notice </div>
  		  	<marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();">
              <div class="card-body">
              	<ul>
              	 <?php	if($row>0)
                    {
                       while($data = 
                       mysqli_fetch_assoc($result))
                       { ?>
                             <li> <?php echo $data["notice"]; ?></li> 
                            <?php}
                       
                    }
                     else
                    { ?>
	                   <li> Notice - 1</li>
                    <?php } ?>
              		
                </ul>
              </div>
          </marquee>
  		  </div>	
  		</div>
  	</div>
  </div>
  <a href="logout.php"> Logout </a>
  </body>
</html>