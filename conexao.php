<?php
$host =  "localhost";
$user = "root";
$pass = '';
$db = "bdcomponente";
$conexao = mysqli_connect($host, $user, $pass) or die (mysqli_error($conexao));
mysqli_select_db($conexao, $db);

?>