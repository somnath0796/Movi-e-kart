<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Mov-e-Kart :: My Purchases</title>
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
			.image{
				
				text-align: right;
			}
            .navbar-brand {
                padding: 0 !important;
                margin: 0 !important;
            }
        table{
            white-space: normal;
            border-spacing: inherit;
            word-spacing: normal;
            
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
			  <li class="active"><a href="purchases.php">Your Purchases</a></li>
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
        <?php 
                    if($user==="Guest"){
                        echo "No results to show";
                    }
                    else{
                        $servername="localhost";
                        $username="root";
                        $password="";
                        $dbname="movies";
                    
                        $connect = mysqli_connect("$servername","$username","$password","$dbname")or die("cannot Connect to Database");
                    
                        $sql="SELECT * FROM purchase WHERE uname=$user;";
                    
                        $result = mysqli_query($connect,$sql);
                        $mid="";
                        $mname="";
                        if($result==false){ ?>
                            <table border=6px width="100%">
                                <thead>
                                    <tr>
                                        <th><center>Movies Owned</center></th>
                                        <th><center>Purchased With</center></th>
                                        <th><center>Watch</center></th>
                                    </tr>
                                </thead>
                            </table>
    <?php
                        }
                
                    elseif(mysqli_num_rows($result) > 0){
                       
                        while($row=mysqli_fetch_row($result)){
                            $mid=row[1];
                            $sql2 = "SELECT Name FROM movie WHERE M_id=$mid;";
                            $result1 = mysqli_query($connect,$sql2);
                            $row1 = mysqli_fetch_row($result1);
                    
                    
        ?>
                    <table border=6px width="100%">
                        <thead>
                            <tr>
                                <th><center>Movies Owned</center></th>
                                <th><center>Purchased With</center></th>
                                <th><center>Watch</center></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                echo "<tr><td>$row1[0]</td><td>$row[3]</td><td><a href='movie-watch.php?id=$mid' class='btn btn-primary'></a></td></tr>";
                            ?>
                        </tbody>
                    </table>
         <?php               
                        }
                    }                    
                }
                    
        
        ?>
        
		<script>
			
		</script>
	</div>

	 
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		 <script src="js/bootstrap.min.js"></script>
	 </body>
 
 </html>