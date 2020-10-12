<?php

// Database variables
$db_name = 'test';
$db_host = '127.0.0.1';
$db_user = 'root';
$db_password = '';

// connect MySQL Database using PDO
$pdo = new PDO("mysql:dbname=".$db_name.";host=".$db_host, $db_user, $db_password);