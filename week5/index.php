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

  // Fetch all
  // mysqli_fetch_all($colors, MYSQLI_ASSOC);

  // Associative array
  // $row = mysqli_fetch_assoc($colors);

  // while Loop
  while ($row = mysqli_fetch_assoc($colors)) {
    echo '<div style="background-color: '. $row["Hex"] .'; line-height: 120px; text-align: center; font-size: 20px;">' 
    . $row["Name"] .
    '</div>';
  }

  // echo '<pre>' . print_r($colors, true) . '</pre>';
  // echo "<div style = "background-color: '. $colors['Hex'] .'">""</div>"
  mysqli_close($connect);
?>
  
</body>
</html>