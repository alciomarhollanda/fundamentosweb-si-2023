<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "si3a";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "select * from estado;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["idEstado"]. " - Name: " . $row["nomeEstado"]. " <br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>