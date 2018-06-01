<?php
session_start();
require 'config.php';

if(empty($_SESSION['logado'])) {
	header("Location: login.php");
	exit;
}

$email = '';


$sql = "SELECT email FROM usuarios WHERE id = '".addslashes($_SESSION['logado'])."'";
$sql = $pdo->query($sql);
if($sql->rowCount() > 0) {
	$info = $sql->fetch();
	$email = $info['email'];
	//$codigo = $info['codigo'];
}
?>
<h1>Área interna do sistema</h1>
<p>Usuário: <?php echo $email; ?> - <a href="sair.php">Sair</a></p>
