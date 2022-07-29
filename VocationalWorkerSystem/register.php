<?php
    include('conn.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="register.css">
    <title>Registration Page</title>
</head>
<body>
    <form action="register.php" method="POST">
    <div class="register">
        <div class="form-group">
            <label> Firstname </label>
            <input type="text" name="firstname" class="form-control" placeholder="Enter Firstname">
        </div>
        <div class="form-group">
            <label> Lastname </label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter Lastname">
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" class="form-control checking_email" placeholder="Enter Email">
            <small class="error_email" style="color: red;"></small>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Enter Password">
        </div>
        <div class="form-group">
             <button type="submit" name="registerbtn" class="btn btn-primary">Save</button>
        </div>
       
        <input type="hidden" name="usertype" value="admin">

    </div>
       
</form>

</body>
</html>