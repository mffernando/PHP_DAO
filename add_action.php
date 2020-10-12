<?php
require 'config.php';
require 'DAO/UserDAOMySQL.php';

$userDAO = new UserDAOMySQL($pdo);

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// validate name and e-mail field are not empty
if ($name && $email) {
    //if not empty, add
    if ($userDAO->findByEmail($email) === false) {
        $newUser = new User();
        $newUser->setName($name);
        $newUser->setEmail($email);

        $userDAO->create($newUser);

        //add and return do index
        header("Location: index.php");
        exit;  
    } else {
        //else return to add again
        header("Location: add.php");
        exit;  
    }
} else {
    // return add.php
    header("Location: add.php");
    exit;
}

?>