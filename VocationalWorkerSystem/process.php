<?php
require_once('conn.php');
?>
<?php

if(isset($_POST)){

	$fname 		= $_POST['firstname'];
	$lname 		= $_POST['lastname'];
	$email 			= $_POST['email'];
	$phonenumber	= $_POST['phonenumber'];
	$password 		= sha1($_POST['password']);

		$sql = "INSERT INTO workers (firstname, lastname, email, password, phonenumber ) VALUES(?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$firstname, $lastname, $email, $password, $phonenumber]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were erros while saving the data.';
		}
}else{
	echo 'No data';
}