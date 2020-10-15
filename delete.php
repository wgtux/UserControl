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

<h1>Apagando Usuarios</h1>

<?php
    require 'config.php';

    if(isset($_GET['id']) && empty($_GET['id']) == false) {
        $id = addslashes($_GET['id']);

        $sql = "DELETE FROM usuarios WHERE id ='$id' ";
        $pdo->query($sql);

        header("Location: index.php");
    }
    else{
        header("Location: index.php");
    }
?>
</body>
</html>