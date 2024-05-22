<?php

include_once 'DBC.php';

if (empty($_POST["name"]) || empty($_POST["password"])) 
{
    $_SESSION["error"] = "Username or Password is empty";
    header('Location: /login.php');
    exit();
}

if(insertUser($_POST["name"], $_POST["password"]))
{
    header("Location: home.php");
    exit();
} 
else 
{
    $_SESSION["error"] = "Unexpected error just happened!";
    header('Location: /login.php');
}

/**
 * @param string $username
 * @param string $password
 * @return bool
 */
function insertUser(string $username, string $password): bool
{
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $connection = DBC::getConnection();
    $statement = $connection->prepare("INSERT INTO User (username, password) VALUES (:username, :password)");
    $statement->bindParam(":username", $username);
    $statement->bindParam(":password", $hashedPassword);
    return $statement->execute();
}