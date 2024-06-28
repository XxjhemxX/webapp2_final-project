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
  <title>List Page</title>
  <link href="stylesheet.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <h1>Name of Employees</h1>

  <?php
  $query = "SELECT * FROM users";

  $result = mysqli_query($conn, $query); // Query the database

  echo "<ul id='userList'>";
  // if PHP notices null - it will treat it as FALSE
  while($row = mysqli_fetch_assoc($result)) {      // if PHP kapag may laman  - and treatment sa $row ay TRUE
    $id=$row['id'];
    $name=$row['name'];
    $username=$row['username'];
    $email=$row['email'];
    $phone=$row['phone'];
    $website=$row['website'];
  
    echo "<li><a href='posts.php?id=$id'>$name</a></li>";
  }

?>

</body>
</html>
