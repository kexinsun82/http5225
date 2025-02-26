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
          $encrypted_food = base64_encode($food['food_item']);

          echo '<div class="col-md-4">
                <div class="card mb-4 shadow">
                  <div class="card-body">
                    <h5 class="card-title text-primary">' . $food['food_item'] . '</h5>
                    <span class="badge bg-info">' . $food['category_name'] . '</span>
                    <p class="mt-2">
                      <strong>Calories:</strong> ' . $food['calories'] . ' kcal<br>
                      <strong>Protein:</strong> ' . $food['protein'] . ' g<br>
                      <strong>Fat:</strong> ' . $food['fat'] . ' g<br>
                      <strong>Carbs:</strong> ' . $food['carbohydrates'] . ' g<br>
                      <strong>Sugars:</strong> ' . $food['sugars'] . ' g
                    </p>
                  </div>
                </div>
              </div>';
        }
    ?>
    </div>
  </div>
</body>

</html>