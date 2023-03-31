<?php
$nome = $_POST["nome"];
$cidade = $_POST["cidade"];
$idade = $_POST["idade"];
$telefone = $_POST["telefone"];
$rua = $_POST["rua"];
$numero = $_POST["numero"];
$genero = $_POST["genero"];

echo "$nome - $cidade - $idade - $telefone - $rua - $numero - $genero";

$arquivo = fopen("clientes.txt" , "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $cidade . "\t");
fwrite($arquivo, $idade . "\t");
fwrite($arquivo, $telefone . "\t");
fwrite($arquivo, $rua . "\t");
fwrite($arquivo, $numero . "\t");
fwrite($arquivo, $genero . "\n");

fclose($arquivo);

header("location:index.php");
?>