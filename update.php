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

    $id = 0;

    if(isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);
    }

    if(isset($_POST['nome']) && empty($_POST['nome']) == false){
        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);

        $sql = "UPDATE usuarios SET nome = '$nome', email = '$email' WHERE id = '$id' ";
        $pdo->query($sql);

        header("Location: index.php");
    }

    $sql = "SELECT * FROM usuarios WHERE id ='$id'";
    $sql = $pdo->query($sql);

    if($sql->rowCount() > 0){
        $dado = $sql->fetch();
    }
    else{
        header("Location: index.php");
    }

?>

<h1>Atualizando Dados</h1>

<form method="POST">
    <span>Nome: </span>
    <input type="text" name="nome" value="<?php echo $dado['nome']; ?>"/><br /><br />

    <span>Email: </span>
    <input type="email" name="email" value="<?php echo $dado['email']; ?>" /><br /><br />

    <input type="submit" value="Atualizar" />
</form>

</body>
</html>