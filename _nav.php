<?php
$loggedin = false;
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
{
  $loggedin == true;
}
echo
'<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="login.php"><b>Navbar</b></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
        <a class="nav-link" href="login.php">Login</a>
        <a class="nav-link" href="signup.php">SignUp</a>
        <a class="nav-link" href="logout.php">LogOut</a>
      </div>
    </div>
  </div>
</nav>'
?>