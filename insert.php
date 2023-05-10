<?php
require_once('conexao.php');



$cadastrar1 = new conexao(); 
# print_r($objeto1->conn);

if ($cadastrar1->cadastro($_POST['id'],$_POST['nome'],$_POST['rg'],$_POST['telefone'],$_POST['escola'])){
    print("E não é que deu certo ! ...");
};

unset($cadastrar1);

$cadastrar1 = new conexao(); 
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