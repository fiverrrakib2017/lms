<?php 

include 'database_connect.php';


if(isset($_POST["email"]))
{
$email = $_POST["email"];
	$username2 = $_POST["email"];

 $password = $_POST["password"];
 $usr = $con -> query("SELECT * FROM admin WHERE username='$username2' AND password='$password' LIMIT 1");
 $usrext = $usr->num_rows;
 
 if($usrext==1)
 {
      while($rows= $usr->fetch_array())
  {
      $uid = $rows["id"];
      $username = $rows["username"];
  }
session_start();
$_SESSION["uid"] = $uid;    
$_SESSION["username"] = $username;   
echo 1;
     
 }else{
    echo 0;
 }
    
}













 ?>