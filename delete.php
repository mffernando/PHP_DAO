<?php
require 'config.php';
require 'DAO/UserDAOMySQL.php';

$userDAO = new UserDAOMySQL($pdo);

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $userDAO->delete($id);
}

header("Location: index.php");
exit;

?>