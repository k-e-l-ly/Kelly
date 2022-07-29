<?php
if (isset($_POST["login"]))
{
	$uname = $_POST['username'];
    $password = $_POST["password"];


    require_once("db_connect.php");
    $sql="SELECT FROM clients WHERE Username='$uname'";
  $results=mysqli_query($conn, $sql);//content of db


   $row=myqsli_fetch_assoc($results);

   print_r($row);

   if($row["password"]==$password)
   {
   	
   	session_start();
   	$_SESSION['username']=$row[""];

   	header("location:landing.php");
   }
   else
   {
   	header("location:login.php?error=invalidlogin");
   }
}



?>