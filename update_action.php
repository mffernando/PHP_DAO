<?php
require 'config.php';
require 'DAO/UserDAOMySQL.php';

$userDAO = new UserDAOMySQL($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {
    $user = $userDAO->findById($id);
    //$user = new User();
   // $user->setId($id);
    $user->setName($name);
    $user->setEmail($email);

    $userDAO->update($user);

    header("Location: index.php");
    exit;

} else {
    // return add.php
    header("Location: update.php?id=".$id);
    exit;
}

?>