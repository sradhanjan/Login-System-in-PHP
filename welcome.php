<?php
session_start();

if(!isset($_SESSION['loggedin'])|| $_SESSION['loggedin'] != true)
{
  header("location: login.php");
  exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Remote style sheet -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">

    <!-- Local style sheet relative to workspace folder -->
    <link rel="stylesheet" href="/style.css">

    <!-- Local style sheet relative to this file -->
    <link rel="stylesheet" href="style.css">

    <!-- Embedded style sheet -->
    <style>
        #content {
            display: block;
        }

        .internal {
            display: block;
        }
    </style>
</head>

<body>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Welcome</title>
  </head>
  <body>
    <?php
    require 'partials/_nav.php'
    ?>
    <div class="container my-3">
        <div class="alert alert-success" role="alert">
      <h4 class="alert-heading">Welcome! <?php echo $_SESSION['username']?></h4>
    </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    
  </body>
</html>
</body>

</html>