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

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Log-In</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php

if (isset($_POST['username'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM users where username='$username'";

  $result = mysqli_query($conn, $query); // Query the database

  $row = mysqli_fetch_assoc($result);

  // username found
  if(isset($row)) {
    // pupunta sa next page
    header('location: post.php');
  } 

}

?>

  <!-- <img src="images/bg.jpg"> -->
  <form class="box" action="index.php" method="post">
    <h1>LOG-IN</h1>
    <input type="text" placeholder="Username" name="username">
    <input type="text" style="-webkit-text-security: circle" placeholder="Enter Password" required name="password" />
    <input type="submit" placeholder="Login">
  </form>
 
</body>

</html>