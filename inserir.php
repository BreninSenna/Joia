<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inserir Componentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <h3 class="text-center text-sucess">INSERIR COMPONENTE</h3>
    <?php
    $curso = $_POST["Curso"];
    $componente =  $_POST["Componente"];

    require "conexao.php";
    ?>
</body>
</html>
