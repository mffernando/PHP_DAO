<?php
// Simple CRUD
require 'config.php';
require 'DAO/UserDAOMySQL.php';

$userDAO = new UserDAOMySQL($pdo);
$list = $userDAO->findAll();

?>

<a href="add.php">Novo Usuário</a>

<table border="1" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Opções</th>
    </tr>

    <?php foreach ($list as $user): ?>
        <tr>
            <td><?=$user->getId();?></td>
            <td><?=$user->getName();?></td>
            <td><?=$user->getEmail();?></td>
            <td>
                <a href="update.php?id=<?=$user->getId();?>">[Editar]</a>
                <a href="delete.php?id=<?=$user->getId();?>" onclick="return confirm('Tem certeza que deseja excluir?')">[Excluir]</a>
            </td>
        </tr>
    <?php endforeach ?>

</table>

<?php
?>