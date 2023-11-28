<?php

declare(strict_types=1);

function signup_inputs() {

    if (isset($_SESSION["signup_data"]["username"]) && !isset($_SESSION["error_signup"]["username_taken"])) {
        echo '<label for="username" class="formcontent">Username</label><br><input type="text" class="username" name="username" value="' . $_SESSION["signup_data"]["username"] . '"><br>';
    } else {
        echo '<label for="username" class="formcontent">Username</label><br><input type="text" class="username" name="username"><br>';
    }

    echo '<label for="password" class="formcontent">Password</label><br><input type="text" class="password" name="pword"><br>';

    if (isset($_SESSION["signup_data"]["email"]) && !isset($_SESSION["error_signup"]["email_used"]) && !isset($_SESSION["error_signup"]["invalid_email"])) {
        echo '<label for="email" class="formcontent">Email</label><br><input type="text" class="email" name="email" value="' . $_SESSION["signup_data"]["email"] . '"><br>';
    } else {
        echo '<label for="email" class="formcontent">Email</label><br><input type="text" class="email" name="email"><br>';
    }

}

function check_signup_errors() {
    if (isset($_SESSION["errors_signup"])) {
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        foreach ($errors as $error) {
            echo '<p class="form-errors">' . $error . '</p>';
            echo '<br>';
        }

        unset($_SESSION["errors_signup"]);
    } else if (isset($_GET["signup"]) && $_GET["signup"] === "success") {
        echo "<script>alert('Sign up success!')</script>";
    }
}