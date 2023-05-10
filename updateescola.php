<?php
require_once('conexao.php');


$alterar4 = new conexao(); 
# print_r($objeto1->conn);

if ($alterar4->alterarEscola($_POST['id'],$_POST['escola'])){
    print("E não é que deu certo ! ...");
};

unset($alterar4);

$alterar4 = new conexao(); 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
</head>
<body>
<p> 
    <a href="index.php" class="btn btn-danger">Return</a>
</p>

</body>

</html>