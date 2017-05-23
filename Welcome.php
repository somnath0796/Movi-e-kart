<html>
	<head><title>Mov-e-Kart::Welcome</title></head>
	<body>
		<?php 
			#include login_check.php;
			session_start();
			if(isset($_SESSION['SName'])){
				echo "<h1> Welcome, ".$_SESSION['SName']."!!</h1><hr>";
				echo "<h2>".$_SESSION['Status']."</h2>";
			}
			else{
				echo "<h2>".$_SESSION['Status']."</h2>";
				print("<h4><hr><hr><a href='login.html'> Please Login Again!</a></h4>");
			}
			
		?>
	</body>
</html>
