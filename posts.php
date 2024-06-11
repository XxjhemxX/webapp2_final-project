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
  <title>Details Page</title>
  <link href="stylesheet2.css" rel="stylesheet" type="text/css" />
</head>

<body>
<?php
  $id = $_GET['id'];

  $query = "SELECT * FROM users where id=$id";

  $result = mysqli_query($conn, $query); // Query the database

  $row = mysqli_fetch_assoc($result);

  $name=$row['name'];
  $username=$row['username'];
  $email=$row['email'];
  $website=$row['website'];

  echo "
      <div id='userDetails'>
        <div id='name'>$name</div>
        <div id='username'>$username</div>
        <div id='email'>$email</div>
        <div id='website'>$website</div>
      </div>
    ";
?>


  
  
  <!-- <script>
      const urlParams = new URLSearchParams(window.location.search);
      const id = urlParams.get('id');
      
      fetch('https://jsonplaceholder.typicode.com/users/' + id)
      .then((data)=>{
          return data.json();
      })
      .then((user)=>{
          let name = document.getElementById('name');
          let username = document.getElementById('username');
          let email = document.getElementById('email');
          let website = document.getElementById('website');

          name.textContent = user.name;
          username.textContent = user.username;
          email.textContent = user.email;
          website.textContent = user.website;
      })

  </script> -->
</body>
</html>