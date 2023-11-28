<?php

if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $username = $_POST['username'];
    $pword = $_POST['pword'];
    $email = $_POST['email'];

    try {
        require_once 'dbh.inc.php';
        require_once 'signup_model.inc.php';
        require_once 'signup_contr.inc.php';

        // prevent users from incorrectly interating with form (error handlers)
        $errors = [];

        if (is_input_empty($username, $pword, $email)) {
            $errors["empty_input"] = "Fill in all the fields!";
        } 
        if (is_email_invalid($email)){
            $errors["invalid_email"] = "Enter a valid email!";
        }

        if (is_username_taken($pdo, $username)){
            $errors["username_taken"] = "Username is already taken!";
            
        }

        if (is_email_registered($pdo, $email)){
            $errors["email_used"] = "Email already registered!";
        }

        require_once 'config_session.inc.php';

        if ($errors) {
            $_SESSION["errors_signup"] = $errors;
            
            $signupData = [
                "username" => $username,
                "email" => $email
            ];
            $_SESSION["signup_data"] = $signupData;
            header("Location: ../webpages/login.php");
            die();
        }

        create_user($pdo, $username, $pword, $email);

        header("Location: ../webpages/login.php?signup=success");

        $pdo = null;
        $stmt = null;

        die();

    } catch (PDOException $e) {
        die("Error: " . $e->getMessage());
    }
} else {
    header("Location: ../login.php");
    die();
}