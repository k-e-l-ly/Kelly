<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="user.css">
	<title>Search for a worker</title>
</head>
<body>
	<div>
		<h1>Would you like to hire someone today?</h1>
		<h2>Who are you looking for?</h2>
	</div>

	<ul>
			<li><a href=" plumbers.php" class="link">Plumbers</a></li>
			<li><a href=" " class="link">Electricians</a></li>
			<li><a href=" " class="link">Masons</a></li>
	</ul>
</body>
</html>

<?php 

include('conn.php');
$output = '';
if(isset($_POST['search'])){

$searchq = $_POST['search'];
//$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);
echo ($searchq);
$query = mysql_query("SELECT * FROM worktype WHERE worktype_name LIKE '%$searchq%'")or die("could not find results matching your search"); 
$count = mysql_num_rows($query);
if($count == 0){
    $output = 'there was no search result matching to your search';
}else{
    while($row = mysql_fetch_array($query)){
        $workers = $row['workname'];
        $city = $row['city'];

        $output .='<div>'.$workers.''.$city.'</div>';
        }
    }

}

?>
