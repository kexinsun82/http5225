<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daily Food Nutrition</title>

  <!-- Bootstrap CDN CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <!-- nav.php -->
  <?php include('common/nav.php') ?>
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col">
          <h1 class="display-5">All Foods</h1>
        </div>
      </div>
      <div class="row">
        <!-- connection.php -->
        <?php
        include('common/connection.php');
        
        $query = "SELECT f.id, f.food_item, c.category_name, f.calories 
                FROM food f 
                JOIN category c ON f.category_id = c.id";
        $foods = mysqli_query($connect, $query);

        foreach ($foods as $food) {
          echo '<div class="col-md-4">
                  <div class="card mb-4" style="">
                    <div class="card-body">
                      <h5 class="card-title">' . $food['food_item'] . '</h5>
                      <span class="badge rounded-pill bg-primary">' . $food['category_name'] . '</span>
                      <span class="badge rounded-pill bg-success">' . $food["calories"] . '</span>
                    </div>
                  </div>
                </div>';
        }
    ?>
      </div>
    </div>
  </div>
</body>

</html>