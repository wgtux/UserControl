<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=auto, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Controle de Usuario</title>
</head>
<body>
    
<?php
    require 'config.php';

    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $senha = md5(addslashes($_POST['senha']));

        $sql = "INSERT INTO usuarios SET nome = '$nome', email = '$email', senha = '$senha'";
        $pdo->query($sql);

        //volta a pagina iniciar
        header("Location: index.php");
    }

?>

<h1>Adicionando Dados</h1>

<form method="POST">
    <span>Nome: </span>
    <input type="text" name="nome"></input><br /><br />

    <span>Email: </span>
    <input type="text" name="email"></input><br /><br />

    <span>Senha: </span>
    <input type="password" name="senha"></input><br /><br />

    <input type="submit" value="Cadastrar" />
</form>

</body>
</html>