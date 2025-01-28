<!doctype html>
<html>
    <head>
        <title>PHP If Statements</title> 
    </head>
    <body>

        <h1>Code Challenge 1</h1>

        <?php
        // $hour = date('G');
        $hour = ceil(rand(1,24));
        echo '<h2>Food time is' .$hour. '</h2>';

        if ( $hour >=5 && $hour <= 9 )
        {
          echo '<p>Breakfast: "Bananas, Apples, and Oats"</p>';
        }
        elseif ( $hour >=12 && $hour <= 14 )
        {
          echo '<p>Lunch: "Fish, Chicken, and Vegetables"</p>';
        }
        elseif ( $hour >=19 && $hour <= 21 )
        {
          echo '<p>Dinner: "Steak, Carrots, and Broccoli"</p>';
        }
        else
        {
          echo '<p>the animals are not being fed</p>';
        }

        ?>

        <hr>

        <h1>Code Challenge 2</h1>

        <?php
        $randomNumber = ceil(rand(1,100));
        echo $randomNumber;

        if ( $randomNumber%3 == 0 && $randomNumber%5 == 0 )
        {
          echo '<p>the magic number is "FizzBuzz"</p>';
        }
        elseif ( $randomNumber%3 == 0 )
        {
          echo '<p>the magic number is "Fizz"</p>';
        }
        elseif ( $randomNumber%5 == 0 )
        {
          echo '<p>the magic number is "Buzz"</p>';
        }
        else
        {
          echo '<p>the magic number is</p>' . $randomNumber;
        }

        ?>



    </body>
</html>