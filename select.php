<?php

class conselect { 
    private $servername = "127.0.0.1"; 
    private $username = "root";
    private $password = "";
    private $dbname="prova";
    private $conn;
    public function __construct() { 

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM candidatos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th><th>nome</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]." ".$row["rg"]."".$row["telefone"]."".$row["escola"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>