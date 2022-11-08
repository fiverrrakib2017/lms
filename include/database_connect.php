<?php 

 $host="localhost";
 $username="root";
 $password="";
 $db_name="lms";
 // $conn = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
 $con=new mysqli($host,$username,$password,$db_name);
 if (!$con==true) {
 	echo "Database Connection Problem";
 }else{
 	
 }





 ?>