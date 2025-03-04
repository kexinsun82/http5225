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
  <div class="container mt-4">
    <div class="container">
      <h1 class="display-5 text-center mb-4">Food Nutrition Data</h1>
      <div class="row">
        <!-- connection.php -->
        <?php
        include('common/connection.php');
        
        $query = "SELECT f.id, f.food_item, c.category_name, 
                       f.calories, f.protein, f.fat, 
                       f.carbohydrates, f.sugars 
                  FROM food f
                  JOIN category c ON f.category_id = c.id";
        $foods = mysqli_query($connect, $query);

        foreach ($foods as $food) {
          echo '<div class="col-md-4">
                  <div class="card mb-4 shadow">
                    <div class="card-body">
                      <h2 class="card-title text-primary fs-4">' . $food['food_item'] . '</h2>
                      <span class="badge bg-info">' . $food['category_name'] . '</span>
                      <ul class="list-group mt-3">
                        <li class="list-group-item list-group-item-primary">
                          <span class="fw-bold">Calories:</span> ' . $food['calories'] . ' kcal
                        </li>
                        <li class="list-group-item list-group-item-success">
                          <span class="fw-bold">Protein:</span> ' . $food['protein'] . ' g
                        </li>
                        <li class="list-group-item list-group-item-warning">
                          <span class="fw-bold">Fat:</span> ' . $food['fat'] . ' g
                        </li>
                        <li class="list-group-item list-group-item-info">
                          <span class="fw-bold">Carbs:</span> ' . $food['carbohydrates'] . ' g
                        </li>
                        <li class="list-group-item list-group-item-danger">
                          <span class="fw-bold">Sugars:</span> ' . $food['sugars'] . ' g
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>';
      }
    ?>
    </div>
  </div>
</body>

</html>