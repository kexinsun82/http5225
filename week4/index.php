<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Week4 - For-Loop Exercise</title>
</head>
<body>
  
  <?php
  // Function to fetch user data from the JSONPlaceholder API
  function getUsers() {
  $url = "https://jsonplaceholder.typicode.com/users";
  $data = file_get_contents($url);
  return json_decode($data, true);
  }
  // Get the list of users
  $users = getUsers();

  // --- Exerise Start here
  count($users);
  if ( count($users) > 0 )
  {
    for ($x = 0; $x < count($users); $x++) {
      echo "Name: " . $users[$x]['name'] . "<br>";
      echo "Username: " . $users[$x]['username'] . "<br>";
      echo "Email: " . '<a href = "mailto:' . $users[$x]['email'] . '">' . $users[$x]['email'] . '</a>' . "<br>";
      echo "Address: " . $users[$x]['address']['suite'] . $users[$x]['address']['street'] . $users[$x]['address']['city'] . "<br>" . "<hr>";
    }
  } 

  ?>

</body>
</html>