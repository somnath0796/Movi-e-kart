<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Mov-e-Kart :: movies</title>
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
			
			.item{
				
				width: 100px;
				height: 100px;
				margin: 300px auto 0 auto;
				-moz-animation-iteration-count: 6;
                -moz-animation-duration: 2s;
                -moz-animation-delay: 2s;
			}
            
        .glyphicon-star{
            color: darkgoldenrod !important;
        }
        #mov-title{
            background-color: olive!important;
            font-size: 8px !important;
            font-family: "Tahoma" !important;
            padding-top: 25px !important;
            position: relative;
            align-content: center;
            text-align: center;   
        }
        .jumbotron{
            background-color: midnightblue !important;
            color: whitesmoke!important;
        }
        
        #poster{
            border:10px;
            padding-left:30px;
            padding-bottom: 10px;
            
        }
        
        #details{
            padding-right: 10px;
            padding-left: 25px;
            padding-bottom: 15px;
            background-color: darkred!important;
        }
        
        #desc{
            background-color: deepskyblue!important;
            background-blend-mode: luminosity!important;
            color: white !important;
        }
        #trailer{
            background-color: dimgray !important;
            background-blend-mode: luminosity!important;
            color: azure !important;
            padding-top: 25px !important;
            padding-bottom: 25px !important;
            padding-left=150px !important;
        }
        #transac{
            background-color= #ebf442 !important;
            border: 20px !important;
            padding: 40px !important;
            align-items: center !important;
            
        }
        .finaldiv{
            background-color: darkgoldenrod !important;
            color: white !important;
        }
        
    </style> 
   
	
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="css/animate.css" rel="stylesheet" type="text/css">
   
  </head>
	 <body>
		<?php 
		session_start();
         $watch=0;
			if(isset($_SESSION['SName'])){
				$user = $_SESSION['SName'];
                $watch=1;
							
			}
			else{
				$user = "Guest";
                $watch=0;

			}
                    $mid=0;
                    switch($_REQUEST['name']){
                        case 'naam_shabana': $mid=1;
                            break;
                        case 'logan': $mid=2;
                            break;
                        case 'boss_baby': $mid=3;
                            break;
                        case 'kong_skull': $mid=4;
                            break;
                        case 'spidey': $mid=5;
                            break;
                        
                    }
                    
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $dbname="movies";
                    
                    $connect = mysqli_connect("$servername","$username","$password","$dbname")or die("cannot Connect to Database");
                    
                    $sql="SELECT * FROM movie WHERE M_id=$mid ;";
                    
                    $result = mysqli_query($connect,$sql);
                    $row=mysqli_fetch_row($result);
                    
            $name=$row[1];
            $director=$row[5];
            $poster=$row[8];
            $genre=$row[2];
            $year=date("Y",strtotime($row[6]));
            $rdate = $row[6];
            $rating=$row[7];
            $trailer=$row[9];
            $cast=$row[4];
            $duration=$row[3];
            $desc=$row[10];
            $connect->close();
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
        <div class="row">
        <br><br><br>
        
        </div>
       <div class="row">
           <div class="col-md-3">
               <div id=details class="jumbotron" style="float: left">
               <?php echo '<img id="poster" class = "img-responsive " src="'.$poster.'.jpg" />'; ?>
               <table cellpadding=2>
               <h4><tr><td><b>Director: </b></td><td><?php  echo $director; ?></td></tr><h4>
                <h4><tr><td><b>Cast: </b></td><td><?php  echo $cast; ?></td></tr><h4>  
                <h4><tr><td><b>Genre: </b></td><td><?php  echo $genre; ?></td></tr></h4>
                <h4><tr><td><b>Year: </b></td><td><?php  echo $year; ?></td></tr></h4>
                <h4><tr><td><b>Duration: </b></td><td><?php  if($duration==0){
                                                echo 'Yet to be released...';
                                            }
                                        else{ echo $duration." Hours "; } ?></td></tr></h4>
                <h4><tr><td><b>Release Date: </b></td><td><?php  echo $rdate; ?><br></td></tr></h4>
                <h4><tr><td><b>Ratings </b></td><td>
                    <?php 
                        $i=0;
                        if($rating==0){
                            echo 'Yet to be Released...';
                        }
                        $rating=$rating/2;
                        while($i<($rating)){
                            echo '<span class="glyphicon glyphicon-star"></span> ';
                            $i=$i+1;
                        }
                    ?></td></tr></h4>
                </table>    
            </div>
               <br><br>
            <div id = "transac" class="jumbotron" style="background-color=white !important;">
                &nbsp&nbsp&nbsp&nbsp&nbsp
                <a class="btn btn-primary" href="buy.php?mid=<?php echo $mid; ?>" style="height=15px;width=200px;">BUY</a>
                <a class="btn btn-danger" href="rent.php?mid=<?php echo $mid; ?>" style="height=15px;width=200px;">RENT</a>
                
            </div> 
           </div>
           
            <div class="col-md-9">
                <div id="mov-title" class="jumbotron">
                    <h1><?php  echo $name; ?></h1><br>
                </div>
               
               <div id="desc" class="jumbotron" style="padding-top: 18px !important;">
                   <h3><b>Synopsis</b></h3>
                    <?php echo $desc.'<br>'; ?>
                </div>
                
                
                <div id="trailer" class="jumbotron">
                    <h4><b>TRAILER</b></h4>
                    <video width="640" height="auto" controls style="align-content:center; ">
                        <?php echo '<source src="'.$trailer.'.mp4" type="video/mp4">'; ?>
                      Your browser does not support the video tag.
                    </video> 
                </div>
            </div>
           
                   
       </div>
	   <div class=" row jumbotron finaldiv">
           <center> <a class="btn btn-primary" href=movie-watch.php?id=<?php echo $mid; ?> style="align-items: center;"> WATCH NOW!</a></center>
        </div>
      
		<script>
			
		</script>
        
        
        <br><br>
		
		<footer>Best work is put on by Non-Web Developers &copy </footer>
        <br><br>
	</div>

	 
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		
		 <script src="js/bootstrap.min.js"></script>
         
	 </body>
 
 </html>