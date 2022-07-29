<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS User Profile Card</title>
	<link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>
    <nav class = "navbar">
        <div class="nav">
        </div>
        <ul class="links">
            <li class="lists">
                <a href=" portfolio.php" class="link">Add to Portfolio</a>
                <a href=" profile.php" class="link">Edit Profile</a>
                <a href=" logout.php" class="link">Log out</a>
                <a href=" delete.php" class="link">Delete Account</a>
            </li>
            
        </ul>
    </nav>

<div class="wrapper">
    <div class="left">
        <a href=" " class="active"><span ><i class="fas fa-user-circle"></i></span><span></span></a>
        <h4>Johnny Bravo</h4>
         <p>Plumber</p>

      <div class="About">
        <h3>Who am I</h3>
        <p> I am located at Nairobi CBD. I do plumbing work.</p>
      </div>
    </div>

    <div class="right">
        <div class="info">
            <h3>Information</h3>
            <div class="info_data">
                 <div class="data">
                    <h4>Email</h4>
                    <a href = mailto:user@gmail.com>johnnybravo@gmail.com</a>
                 </div>
                 <div class="data">
                   <h4>Phone</h4>
                    <a href="tel:0712345678">0712345678</a>
                </div>
                
                
            </div>
        </div>
      
      
    </div>
</div>

</body>
</html>