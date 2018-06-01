<?php
session_start();
require 'config.php';

if (!empty($_GET['codigo'])) {
    $codigo = addslashes($_GET['codigo']);
    
    $sql = "SELECT * FROM usuarios WHERE codigo = '$codigo'";
    $sql = $pdo->query($sql);
    
    if($sql->rowCount() == 0){
        header("Location: login.php");
        exit;
    }
} else {
    header("Location: login.php");
    exit;
}

if(!empty($_POST['email'])) {
    $email = addslashes($_POST['email']);
    $senha = md5($_POST['senha']);
    
    //Para verificar se já existe uma pessoa com esse e-mail
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $sql = $pdo->query($sql);
    
    if($sql->rowCount() <= 0) {
        
        //Gerando o codigo para o cadastro da pessoa
        $codigo = md5(rand(0,99999).rand(0,99999));
        
        //Inserimos o codigo na query
        $sql = "INSERT INTO usuarios (email, senha, codigo) VALUES ('$email', '$senha', '$codigo')";
        $sql = $pdo->query($sql);
        
        //Seta a sessão para logado
        unset($_SESSION['logado']);
        
        //após inserção do codigo encaminha para o index
        header("Location: index.php");
        exit;
    }
}
?>
<h3>Cadastrar</h3>

<form method="POST">
	E-mail:<br/>
	<input type="email" name="email" /><br/><br/>

	Senha:<br/>
	<input type="password" name="senha" /><br/><br/>

	<input type="submit" value="Cadastrar" />
</form>