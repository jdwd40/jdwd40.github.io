<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$servername = "sdb-b.hosting.stackcp.net";
$username = "jdwd40";
$password = "oqd9}B]kKLDN";
//$password = "X}22aUD1u8AF";
$dbname = "eleclog-31363954df";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Display Data</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Electric Readings Log</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Select Month
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="https://www.jdwd40.com/eleclog/jan2021.php">January</a></li>
            <li><a class="dropdown-item" href="https://www.jdwd40.com/eleclog/feb2021.php">February</a></li>
            <li><a class="dropdown-item" href="https://www.jdwd40.com/eleclog/mar2021.php">March</a></li>
            <li><a class="dropdown-item" href="https://www.jdwd40.com/eleclog/apr2021.php">April</a></li>
            
          </ul>
        </li>
       
      </ul>
     
    </div>
  </div>
</nav>
   
    <div class="container">

    <h3>Monthly Readings</h3>

    <div class="mountButtons">
      
      <button><a href="https://www.jdwd40.com/eleclog/jan2021.php">January</a></button>
      <button><a href="https://www.jdwd40.com/eleclog/feb2021.php">February</a></button>
      <button><a href="https://www.jdwd40.com/eleclog/mar2021.php">March</a></button>
      <button><a href="https://www.jdwd40.com/eleclog/apr2021.php">April</a></button>
      
    </div>
    
    
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <script src="js/display.js"></script>

  </body>
</html>