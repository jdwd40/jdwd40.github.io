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

$dateEntered = $_POST['dateEntered'];

print $dateEntered;

$sql2 = "INSERT INTO readings (read_date, amount, amount_added) VALUES ('".$dateEntered."', '".mysqli_real_escape_string($conn, $_POST['numberEntered'])."', '".mysqli_real_escape_string($conn, $_POST['amountAdded'])."');";
  
if ($conn->query($sql2) === TRUE) {
  echo "Readings Table updated sucessfully!";
  //echo ("dateEntered: "+$_POST['dateEntered']);
  //echo ("numberEntered: "+$_POST['numberEntered']);
} else {
  echo "Error updating table: " . $conn->error;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enter Readings</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div class="container">

    <h3>Enter Reading</h3>

    <form action="enter.php" method="post">
        <div class="mb-3">
            <label for="dateEntered" class="form-label">Date</label>
            <input type="date" class="form-control" id="dateEntered" aria-describedby="dateHelp" name="dateEntered">
            <div id="dateHelp" class="form-text">Enter the date for the Reading</div>
        </div>
        <div class="mb-3">
            <label for="numberEntered" class="form-label">Enter Amount Reading</label>
            <input type="number" min="0" step="any" class="form-control" id="numberEntered" name="numberEntered"/>
        </div>
        <div class="mb-3">
            <label for="amountAdded" class="form-label">Enter Amount Reading</label>
            <input type="number" min="0" step="any" class="form-control" id="amountAdded" name="amountAdded" value=0/>
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
</form>

<?php
                    $result = mysqli_query($conn,"SELECT * FROM readings ORDER BY read_date DESC");

                

                    if ($result === -1){
                        echo "query failed!! ";
                    };

                    print_r(mysqli_num_rows($result));

                    echo "<table class='table table-striped table-sm' border='1'>
                    <thead class='thead-light'>
                    <tr>
                    
                    <th>Date</th>
                    <th>Amount</th>
                    <th>Amount Added</th>
                    </tr>
                    </thead>";

                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        
                        echo "<td>" . $row['read_date'] . "</td>";
                    echo "<td>" . $row['amount'] . "</td>";
                    echo "<td>" . $row['amount_added'] . "</td>";
                    echo "</tr>";
                    }
                    echo "</table>"; 
                    
                    $conn->close();

?>


</div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>