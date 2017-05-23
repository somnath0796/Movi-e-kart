<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<style>
		.jumbotron{
			background-color:#006bb3 !important;
			color:white !important;
			text-align: center;
		}
		.tab-content{
			border-left: 1px solid #ddd;
			border-right: 1px solid #ddd;
			border-bottom: 1px solid #ddd;
			padding: 10px;
		}
		.nav-tabs {
			margin-bottom: 0;
			color: #00004d;
		}
		.nav{
			color: #00004d;
		}
		.navbar-brand {
			padding: 0 !important;
			margin: 0 !important;
		}
        .img-custom{
            -moz-animation-iteration-count: 20;
                -moz-animation-duration: 2s;
                -moz-animation-delay: 2s;
        }
		
	</style> 
    <title>Mov-e-Kart :: Welcome</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">

    
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
			  <li class="active"><a href="index.php">Home</a></li>
			  <li><a href="news.php">New Releases</a></li>
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
		<h1>Upcoming Movies</h1>
		<div id="latest-carousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators" >
			<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
			<li data-target="#mycarousel" data-slide-to="1">  </li>
			<li data-target="#mycarousel" data-slide-to="2">  </li>
			<li data-target="#mycarousel" data-slide-to="3">  </li>
			<li data-target="#mycarousel" data-slide-to="4">  </li>
			</ol>
			
			<div class="carousel-inner">
				<div class="item active">
					<a href="movie.php?name=naam_shabana"><img class="img-responsive" src="images/movie carousel/naam_shabana.jpg"/>
                    <div class="carousel-caption">
                        <h1>Naam Shabana View Trailer</h1> 
                    </div></a>
				</div>
				<div class="item" href="movie.php">
					<a href="movie.php?name=logan"><img class="img-responsive" src="images/movie carousel/logan.jpg"/>
					<div class="carousel-caption">
                        <h1>Logan View Trailer</h1>
                    </div></a>
				</div>
				<div class="item">
					<a href="movie.php?name=boss_baby"><img class="img-responsive" src="images/movie carousel/boss baby.jpg"/>
                    <div class="carousel-caption">
                        <h1>Boss Baby View Trailer</h1>
                    </div></a>
				</div>
				<div class="item">
					<a href="movie.php?name=kong_skull"><img class="img-responsive" src="images/movie carousel/kong skull island.jpg"/>
                    <div class="carousel-caption">
                        <h1>Kong: Skull Island View Trailer</h1>
                    </div></a>
				</div>
				<div class="item">
					<a href="movie.php?name=spidey"><img class="img-responsive" src="images/movie carousel/spidey.jpg"/>
                    <div class="carousel-caption">
                        <h1>Spiderman Homecoming View Trailer</h1>
                    </div></a>
				</div>
			</div>
			
			<a class="left carousel-control" href="#latest-carousel" role="button" data-slide="prev">
				<span class = "glyphicon glyphicon-chevron-left"></span>
			</a>
			
			<a class="right carousel-control" href="#latest-carousel" role="button" data-slide="next">
				<span class = "glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
		<br>
		<div class="page-header row">
			<div class="row col-md-4">
			<center><i>May the Force Be With You! </i></center>
					 <div class="row" >
						<img class="img-responsive img-custom col-md-4 animated pulse" src="images/yoda(big).png"/>
					 </div>
			</div>
			
		</div>
		
		
		
		<br><br>
		
		<footer>Best work is put on by Non-Web Developers &copy </footer>
	</div>
    <h1></h1>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>