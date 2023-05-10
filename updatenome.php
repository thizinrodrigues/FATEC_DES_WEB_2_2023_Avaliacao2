<?php
require_once('conexao.php');


$alterar1 = new conexao(); 
# print_r($objeto1->conn);

if ($alterar1->alterarNome($_POST['id'],$_POST['nome'])){
    print("E não é que deu certo ! ...");
};

unset($alterar1);

$alterar1 = new conexao(); 
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