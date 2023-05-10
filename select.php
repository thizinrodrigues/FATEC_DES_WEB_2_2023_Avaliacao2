<?php

class conselect { 
    private $servername = "127.0.0.1"; 
    private $username = "root";
    private $password = "";
    private $dbname="prova";
    private $conn;
    public function __construct() { 

        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    // Check connection
    if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
    }
}
    public function ler(){
        $sql = "SELECT * FROM candidatos";
    $result = $this->conn->query($sql);

    if ($result->num_rows > 0) {
    echo "<table><tr><th>id</th> <th>nome</th> <th>rg</th> <th>telefone</th> <th>escola</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["nome"]." </td> <td>".$row["rg"]."</td> <td>".$row["telefone"]."</td> <td>".$row["escola"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
    }

    }
    
        

 
$varriavel = new conselect();
$varriavel->ler();

?>