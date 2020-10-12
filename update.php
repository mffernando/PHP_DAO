<?php
require 'config.php';
require 'DAO/UserDAOMySQL.php';

$userDAO = new UserDAOMySQL($pdo);
$user = false;

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $user = $userDAO->findById($id);
}

if ($user === false) {
    header("Location: index.php");
    exit;
}

?>

<h1>Editar Usuário</h1>

<form method="POST" action="update_action.php">
    <!-- hidden id -->
    <input type="hidden" name="id" value="<?=$user->getId();?>" />
    <label>
        Nome: <br/>
        <input type="text" name="name" value="<?=$user->getName();?>" />
    </label><br/><br/>
    <label>
        E-mail: <br/>
        <input type="email" name="email" value="<?=$user->getEmail();?>" />
    </label><br/><br/>
    <input type="submit" value="Atualizar">
</form>