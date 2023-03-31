<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$idade = $_POST["idade"];

echo "$nome - $cidade";

$arquivo = fopen("clientes.txt" , "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $idade . "\t");

fclose($arquivo);

header("location:index.php");
?>