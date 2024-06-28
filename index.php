<?php

$dbhost='127.0.0.1';
$dbuser='root';
$dbpass='';
$dbname='webapp2-db';

try {
  $conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);
} catch(Exception $e) {
  die("Error somewhere");
}

// print_r($_POST);
if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users where username='$username'";

  $result = mysqli_query($conn, $query); // Query the database

  $row = mysqli_fetch_assoc($result);

  if(isset($row)) {
    // pupunta sa next page
    header('location: post.php');
  } 
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Final Project</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Jhem<span>Bellemente</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#">ABOUT</a></li>
                    <li><a href="#">CONTACT</a></li>
                </ul>
            </div>


        </div> 
        <div class="content">
            <h1>Web App<br><span>Development 2</span> <br>BSIS-2</h1><br><br>
            <p class="par">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt neque 
                 expedita <br> atque eveniet quis nesciunt. Quos nulla vero consequuntur, fugit nemo ad <br>
                 delectus a quae totam ipsa illum minus laudantium?</p>

                <form class="form" action="index.php" method="post">
                    <h2>Login Here</h2>
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder="password">
                    <input type="submit" value="Submit" class="submit-btn">

                    <p class="link">Don't have an account<br>
                    <a href="#">Sign up </a> here</a></p>
                    <p class="liw">Log in with</p>

                    <div class="icons">
                        <a href="#"><ion-icon name="logo-facebook"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-google"></ion-icon></a>
                        <a href="#"><ion-icon name="logo-skype"></ion-icon></a>
                    </div>

                </form>
                    </div>
                </div>
        </div>
    </div>

    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>



