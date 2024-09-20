<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de componentes</title> 
</head>
<body>
    <div class="container">
        <h4 class="text-primary text-center">Cadastro de componentes -Pesquisa de dados</h4>
        <?php
        require "conexao.php";
        $sql="SELECT * FROM tbcomponente ORDER BY curso";
        $resultado=mysql_query($conexao, $sql) or die(mysqli_error($conexao))
        echo "<table>";
        echo "<try>";
        echo
        ?>
</body>
</html>
