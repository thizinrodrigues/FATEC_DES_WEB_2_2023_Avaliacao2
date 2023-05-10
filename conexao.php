<?php

class conexao { 
    private $servername = "127.0.0.1"; 
    private $username = "root";
    private $password = "";
    private $dbname="prova";
    private $conn;
    public function __construct() { 
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            print_r($this->conn); 
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
    }

    public function __destruct() { 
        $this->fechar_conexao();
	    print "DESTRUÍDO: Objeto {$this->conn}\n"; 
	} 

    private function fechar_conexao(){
        $this->conn = null;
    }

    public function cadastro($id, $nome, $rg, $telefone, $escola){
        try {
            $sql = "INSERT INTO candidatos (id, nome, rg, telefone, escola) VALUES ('". $id . "', '". $nome . "','" . $rg . "','". $telefone . "', '". $escola . "')";
            # print($sql);
            $this->conn->exec($sql);
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;
    }
    public function deletar($id){
        try {
             $sql = "DELETE FROM candidatos WHERE id = '". $id . "'";
            $this->conn->exec($sql);
            echo "Record deleted successfully";
        }catch(PDOException $e){
            echo $sql . "<br>" . $e->getMessage();
        }
        return True;

    }
    public function alterarNome($id, $nome){
        try {
            $sql = "UPDATE candidatos SET nome = '". $nome . "' WHERE id = $id";
            $this->conn->exec($sql);
            echo "Atualizado successfully";
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

    }

    public function alterarRg($id, $rg){
        try {
            $sql = "UPDATE candidatos SET rg = '". $rg . "' WHERE id = $id";
            $this->conn->exec($sql);
            echo "Atualizado successfully";
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

    }
    public function alterarCelular($id, $telefone){
        try {
            $sql = "UPDATE candidatos SET telefone = '". $telefone . "' WHERE id = $id";
            $this->conn->exec($sql);
            echo "Atualizado successfully";
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

    }
    public function alterarEscola($id, $escola){
        try {
            $sql = "UPDATE candidatos SET escola = '". $escola . "' WHERE id = $id";
            $this->conn->exec($sql);
            echo "Atualizado successfully";
            
            }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            }
        
        $conn = null;

    }

}

?>