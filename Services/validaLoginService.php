<?php
require_once './BDConnect/connectionString.php';

$usuario = $_POST["usuario"];
$senha = $_POST["senha"];

$stmt = $conn->prepare("SELECT * FROM tblusuario WHERE vchUsuario ='" . $usuario . "' and vchSenha = '" . $senha . "'");

$stmt->execute();
$validaUsuario = false;
if ($recordSet = $stmt->fetchAll()) {
	session_start();
	$_SESSION['nome_usuario'] = $usuario;
    header('location: home.php');
} else {
    header('location: sair.php');
}
