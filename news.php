<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Mov-e-Kart :: New Releases</title>
	<style>
			.jumbotron{
				background-color:#7DC920 !important;
				text-align: left;
			}
			.white-text {
				color:#ffffff;
			}
			.tab-content{
				border-top: 1px solid #ddd;
				border-left: 1px solid #ddd;
				border-right: 1px solid #ddd;
				border-bottom: 1px solid #ddd;
				padding: 10px;
			}
			.nav-tabs {
				margin-bottom: 0;
			}
			.navbar-brand {
			padding: 0 !important;
			margin: 0 !important;
			}
			.image{
				
				text-align: right;
			}
		
        
    </style> 
   
	
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

   
  </head>
	 <body>
		<?php 
		session_start();
			if(isset($_SESSION['SName'])){
				$user = $_SESSION['SName'];
							
			}
			else{
				$user = "Guest";

			}
		?>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
			<div class="navbar-header">
			  <a class="navbar-brand pull-left" href="index.php" style="margin-right: 15px;">
			  <img class="img-responsive" src="images/Moviekart Logo(xsml).png">
			  </a>
			</div>
			<ul class="nav navbar-nav">
			  <li><a href="index.php">Home</a></li>
			  <li class="active"><a href="news.php">New Releases</a></li>
			  <li><a href="purchases.php">Your Purchases</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <?php if(isset($_SESSION['SName'])){
				  ?> 
			  <li><a href="process_logout.php"><span class="glyphicon glyphicon-log-in"></span><?php echo " ".$user;?> LOGOUT</a></li>
			  <?php }else{ ?>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><?php echo " GUEST LOGIN";?></a></li>
			  <?php } ?>
			</ul>
		  </div>
		</nav>
	<div class="container">
		<div id="latest-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators" >
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1"></li>
			<li data-target="#mycarousel" data-slide-to="2"></li>
			<li data-target="#mycarousel" data-slide-to="3"></li>
			<li data-target="#mycarousel" data-slide-to="4"></li>
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-responsive" src="images/movie carousel/naam_shabana.jpg"/>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/movie carousel/logan.jpg"/>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/movie carousel/boss baby.jpg"/>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/movie carousel/kong skull island.jpg"/>
				</div>
				<div class="item">
					<img class="img-responsive" src="images/movie carousel/spidey.jpg"/>
				</div>
			</div>
			
			<a class="left carousel-control" href="#latest-carousel" role="button" data-slide="prev">
				<span class = "glyphicon glyphicon-chevron-left"></span>
			</a>
			
			<a class="right carousel-control" href="#latest-carousel" role="button" data-slide="next">
				<span class = "glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
	 
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		 <script src="js/bootstrap.min.js"></script>
	 </body>
 
 </html>