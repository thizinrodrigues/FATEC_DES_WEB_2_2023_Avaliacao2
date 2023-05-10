<?php
require_once('conexao.php');


$alterar3 = new conexao(); 
# print_r($objeto1->conn);

if ($alterar3-> alterarCelular($_POST['id'],$_POST['telefone'])){
    print("E não é que deu certo ! ...");
};

unset($alterar3);

$alterar3 = new conexao(); 
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