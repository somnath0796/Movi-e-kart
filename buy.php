<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Mov-e-Kart :: RENT</title>
	<style>
			.jumbotron{
				background-color:#12AADF !important;
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
			.image{
				
				text-align: right;
			}
            .navbar-brand {
                padding: 0 !important;
                margin: 0 !important;
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
		<nav class="navbar navbar-default navbar-custom">
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
			  <?php if(isset($_SESSION['SName'])){
				  ?> 
			  <li><a href="process_logout.php"><span class="glyphicon glyphicon-log-in"></span><?php echo " ".$user;?> LOGOUT</a></li>
			  <?php }else{ ?>
					<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span><?php echo " GUEST LOGIN";?></a></li>
			  <?php } ?>
			</ul>
		  </div>
		</nav>
		
	<div class="container"><br><br>
        <div class="row">
            <div class="col-md-6">

                <h1><center>BUY movie for Rs. 50</center></h1><br><br>
                <?php
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $dbname="movies";
                    $mname="";
                    $connect = mysqli_connect("$servername","$username","$password","$dbname")or die("cannot Connect to Database");
                    $mid = $_REQUEST['mid'];
                    $sql="SELECT name FROM movies WHERE mid=$mid;";
                
                    if($result = mysqli_query($connect,$sql)){
                          $row = mysqli_fetch_row($result);
                          $mname = $row[0];
                    }
                    else{
                          
                      }  
                    
                ?>
                <h2>Movie Name: <?php echo $mname; ?></h2>
            </div>
            
                <form class="col-md-6 jumbotron" name="payment_det" method="post" action="payment.php?mid=<?php echo $_REQUEST['mid'];?>">
                   <span> <select name="paymeth">
                      <option value="1">Credit Card</option>
                      <option value="2">Debit Card</option>
                    </select><br><br></span>
                    <div class="row">
                        <b class="col-md-6 white-text">CARD NO: </b><input class="col-md-6" type="text" name="CardNo" /><br><br>
                        <b class="col-md-6 white-text">CUSTOMER NAME: </b><input class="col-md-6" type="text" name="Cust" /><br><br>
                        <br><br>
                        <input class="col-md-6 btn btn-default white-text" type="submit" />
                        
                        
                    </div>
                
                </form>
                
        </div>
        
		<script>
			
		</script>
	</div>

	 
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		 <script src="js/bootstrap.min.js"></script>
	 </body>
 
 </html>