<?php

include_once 'DBC.php';

if (empty($_POST["name"]) || empty($_POST["password"])) {
    $_SESSION["error"] = "Username or Password is empty";
    header('Location: /login.php');
    exit();
}

verifyUser($_POST["name"], $_POST["password"]);


/**
 * @param string $username
 * @param string $password
 * @return void
 */
function verifyUser(string $username, string $password): void
{
    $connection = DBC::getConnection();
    $statement = $connection->prepare("SELECT id, username, password FROM User WHERE username = :username LIMIT 1");
    $statement->execute([":username" => $username]);
    $result = $statement->fetch(PDO::FETCH_ASSOC);
    if ($result && password_verify($password, $result["password"])) {
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_name"] = $result["username"];
        header("Location: /home.php");
    } else {
        $_SESSION["error"] = "Invalid login";
        header("Location: /login.php");
    }
}


