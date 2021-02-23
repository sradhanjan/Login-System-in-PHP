<?php
$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	include "partials/db_connect.php";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$cPassword = $_POST["cPassword"];
  //$exists = false;
  
  //check whether this username exists
  $existSql = "SELECT * FROM `users` WHERE username = '$username'";
  $result = mysqli_query($conn,$existSql);
  $numExistRows = mysqli_num_rows($result);

  if($numExistRows > 0)
  {
    $showError = "username already exists";
  }
  else
  {
    if(($password == $cPassword))
	{
    $hash = password_hash($password,PASSWORD_DEFAULT);
		$sql = "INSERT INTO `users` (`username`, `password`, `date`) VALUES ('$username', '$hash', current_timestamp())";
    $result = mysqli_query($conn,$sql);
    
    if($result)
    {
      $showAlert = true;
    }
  }
  else
  {
    $showError = "Passwords do not match";
  }
  }
	
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

    <title>Sign Up</title>
  </head>
  <body>
    <?php require 'partials/_nav.php'?>
    <?php
    if($showAlert)
    {
      echo 
      '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your account has been successfully created
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }

    if($showError)
    {
      echo 
      '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Failed!</strong>'.$showError.' <button type="button" class="btn-close" 
        data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
   
   ?>
	<div class="container">
	<h1 class="text-center">Sign Up to our Website</h1>
	<form action ="signup.php" method="post">
		<div class="form-group col-md-6">
			<label for="username" class="form-label">Username</label>
			<input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
			<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="form-group col-md-6">
			<label for="password" class="form-label">Password</label>
			<input type="password" class="form-control" id="password" name="password">
		</div>
		<div class="form-group col-md-6">
			<label for="cPassword" class="form-label">Confirm Password</label>
			<input type="password" class="form-control" id="cPassword" name="cPassword">
		</div>
		
		<button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
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