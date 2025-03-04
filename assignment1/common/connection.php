<?php
        $connect = mysqli_connect(
          'localhost',
          'u866400095_kexinsun',
          'Skx4377660720',
          'u866400095_foods'
        ); 
        if (!$connect) {
          echo 'Error Code: ' . mysqli_connect_errno();
          echo 'Error Message: ' . mysqli_connect_error();
          exit;
        }
?>