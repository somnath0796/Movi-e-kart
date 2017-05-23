<?php
   extract($_POST);
   $host="localhost";
   $username="root";
   $password="";
   $tblname="users";
   
   
   $mysqli=new mysqli('localhost','root','','movies');
   if($mysqli->connect_errno){
	   die("Could not connect to DB" . ["$mysqli->connect_error"]);
   }
   
   
   $query="INSERT INTO users VALUES ('$UName','$PWord','$FName','$LName','$email','$phn','$addr1','$addr2','$city','$cntry')";
   $insert_row=$mysqli->query($query);
   if($insert_row){
	   header("location: login.php");
   }
   else{
	   die("Table not Found.");
   }
   $mysqli->close();
   
   
?>