<?php

declare(strict_types=1);

function is_input_empty(string $username, string $pword) {
    if (empty($username) || empty($pword)) {
        return true;
    } else {
        return false;
    }
}

function is_username_wrong(bool|array $result) {
    if (!$result) {
        return true;
    } else {
        return false;
    }
}

function is_password_wrong(string $pword, string $hashedpword) {
    return !(password_verify($pword, $hashedpword));
}
