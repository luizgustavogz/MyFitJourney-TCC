<?php
require_once './BDConnect/connectionString.php';

$nome = $_POST["nome"];
$sexo = $_POST["sexo"];
$usuario = $_POST["usuario"];
$email = $_POST["email"];
$senha = $_POST["senha"];


$sql = "INSERT INTO tblusuario (`vchUsuario`, `vchSenha`, `vchEmail`, `vchNome`, `vchSexo`) 
VALUES ('" . $usuario . "','" . $senha . "','" . $email . "','" . $nome . "','" . $sexo . "')";

echo $sql;
echo "<br><br>";

$stmt = $conn->prepare($sql);
$stmt->execute();

header('Location: index.php');
