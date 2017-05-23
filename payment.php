<html>

<body>
    <?php 
                    session_start();
         
			if(isset($_SESSION['SName'])){
				$user = $_SESSION['SName'];		
			}
			else{
				$user = "Guest";
			}
                    $servername="localhost";
                    $username="root";
                    $password="";
                    $dbname="movies";
                    $mname="";
                    $connect = mysqli_connect("$servername","$username","$password","$dbname")or die("cannot Connect to Database");
                    $mid = $_REQUEST['mid'];
                    $sql="INSERT INTO purchase VALUES ('$mid','$user','$_POST['paymeth']','$_POST['CardNo']','$_POST['Cust']');";
                
                    if($insert = mysqli_query($connect,$sql)){
                          header("location: purchases.php");
                    }
                    else{
                          
                      }  
    
    
    
    ?>
</body>
</html>