<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week5</title>
</head>
<body>

<?php
  // connection string
  // localhost, username, password, database name
  $connect = mysqli_connect('localhost', 'root', 'root', 'color');

  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }

  $query = "SELECT * FROM colors";
  $colors = mysqli_query($connect, $query);

  // echo '<pre>' . print_r($colors) . '</pre>';
  echo "<div style = "background-color: '. $colors['Hex'] .'">""</div>"

?>
  
</body>
</html>