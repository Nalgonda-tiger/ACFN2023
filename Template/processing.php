<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["pword"];
    $email = $_POST["email"];

    try {
        require_once 'dbh.inc.php';
        
        $query= "INSERT INTO users (username, pword, email) VALUES (:username, :pword, :email);";
        
        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":username", $username);
        
        $stmt->bindParam(":pword", $password);
        
        $stmt->bindParam(":email", $email);
        $stmt->execute();

        header("Location: login.html");

        // die();
        
    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }


} else {
    header("Location: login.html");
}

    // if (empty($username) and empty($password)) {
    //     header("Location: login.html");
    //     echo "<alert>Please enter a username and password</alert>";
    // } else {
    //     if (empty($username)) {
    //         header("Location: login.html");
    //         echo "<alert>Please enter a username</alert>";
    //     }
    //     if (empty($password)) {
    //         header("Location: login.html");
    //         echo "<alert>Please enter a password</alert>";
    //     }
    // }
