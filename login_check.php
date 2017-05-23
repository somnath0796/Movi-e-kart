<?php
	$host="localhost";
	$un="root";
	$password="";
	$dbname="movies";
	$tblname="users";
	
	$connect = mysqli_connect("$host","$un","$password","$dbname")or die("cannot Connect to Database");
	
	$username = $_POST['UName'];
	$passw = $_POST['PWord'];
	
	$sqlquery = "SELECT * FROM $tblname WHERE uname='$username' and pword='$passw';";
	$result = mysqli_query($connect,$sqlquery);
	
	$count=mysqli_num_rows($result);
	
	if($count==1){
		$row=mysqli_fetch_row($result);
		$sname=$row[0];
		session_start();
		$_SESSION['SName']=$sname;
		$_SESSION['Status']="Session Status: $sname has Logged in!";
		
		if(isset($_POST['Remember'])){
			setcookie("UName",$username,time()+60*60*24,"/");
			setcookie("PWord",$passw,time()+60*60*24,"/");
		}
		else{
			setcookie("UName","",time()-5);
			setcookie("PWord","",time()-5);
		}
		header("location:index.php");
	}
	else {
		session_start();
		if(isset($_SESSION['SName'])){
			unset($_SESSION['SName']);
		}
		$_SESSION['Status']="Login Failed";
		header("location:login.php");
		
	}
	
?>