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
?>

<h1>Usuarios do Sistema</h1>

<h3><a href="add.php">Adicionar Novo Usuario</a></h3>
	
    <table>
		<tr>
			<th>Nome</th>
			<th>Email</th>
			<th class="direita">Ações</th>
        </tr>
        
        <?php
        
            $sql = "SELECT * FROM usuarios";
            $sql = $pdo->query($sql);

            if($sql->rowCount()>0){
                
                foreach($sql->fetchAll() as $users) {
                    echo '<tr>';
                    echo '<td>'.$users['nome'].'</td>';
                    echo '<td>'.$users['email'].'</td>';
                    echo '<td><a href="update.php?id='.$users['id'].'"> Editar</a>  --- <a href="delete.php?id='.$users['id'].'"> Excluir</a></td>';
                    echo '</tr>';
                }
            }
        ?>
	</table>
</body>
</html>