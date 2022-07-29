<?php
$servername='localhost';
$username='root';
$password='';
$dbname = "vocational_workers";
$conn=mysqli_connect($servername,$username,$password,"$dbname");
if(!$conn){
	die('Could not Connect My Sql:' .mysql_error());
}
$query = mysqli_query($conn,"SELECT AVG(rating) as AVGRATE from rates where status=1");
$row = mysqli_fetch_array($query);
$AVGRATE=$row['AVGRATE'];
$query = mysqli_query($conn,"SELECT count(rating) as Total from rates where status=1");
$row = mysqli_fetch_array($query);
$Total=$row['Total'];
$query = mysqli_query($conn,"SELECT count(remark) as Totalreview from  rates where status=1");
$row = mysqli_fetch_array($query);
$Total_review=$row['Totalreview'];
$review = mysqli_query($conn,"SELECT remark,rating,email from rates where status=1 order by date_time desc limit 4 ");
$rating = mysqli_query($conn,"SELECT count(*) as Total,rating from rates group by rating order by rating desc");
?>