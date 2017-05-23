<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mov-e-Kart :: Login</title>
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
    <!-- Bootstrap -->
	
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
				$status=$_SESSION['Status'];
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
			  <li><a href="news.php">New Releases</a></li>
			  <li><a href="purchases.php">Your Purchases</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="register.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			  <li><a class="active" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			</ul>
		  </div>
		</nav>
     <div>
        <div class="container"><br>
		
        <div class="page-header">
        
		<h1> &nbsp You Must be loving Flicks!   <img src="images/heart.png"/></h1>
        </div>
        <br>
        <div class="row">	
			<div class="image col-md-6">
				<img class="img-responsive" src="images/Moviekart Logo.png">
				<center><i>"Hasta la Vista Baby."</i></center>
				<img class="img-responsive col-md-4" src="images/terminator.png"/>
			</div>
			<div class="jumbotron col-md-6">
				 <br>
				<div class=row>
					<form action="login_check.php" method="post">
						<b class="white-text">Username: </b><input type="text" name="UName" value=<?php echo Cookie_val(1);?>><br><br>
						<b class="white-text">Password: </b><input type="password" name="PWord" value= <?php echo "".Cookie_val(2);?> ><br><br>
						<input type="checkbox" name="Remember" value="rem_me"><b class="white-text">  Remember Me </b><br><br>
						<?php if(isset($_SESSION['SName'])){
                                echo "You are already logged in!<br>";
							} else{	?> 
					   <p><button type="submit" class="btn btn-default btn-lg col-md-6" value="Login" role="Sign in">Log In</button>
					   <a href="register.html" class="btn btn-default btn-lg col-md-6">Wanna Sign Up!</a></t></p><br>
					   <div style="color: #cc0000;"><?php echo $status;?></div>
						<?php } ?>
					</form> 
					
				</div>
			</div>
			
		</div>
		<br><br><br><br><br><br><br><br>
        <footer>Best work is put on by Non-Web Developers &copy </footer>
    </div>
     </div>
    
    
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
  
  <?php
	function Cookie_val($ch){
		if($ch==1){
			if(isset($_COOKIE['UName'])){
				return $_COOKIE['UName'];
			}
			else
				return;
		}
		else{
			if(isset($_COOKIE['PWord'])){
				return $_COOKIE['PWord'];
			}
			else{
				return;
			}
		}
	}
  ?>
</html>