<?php

if ($_GET['action'] == "read") {
    readJSON();
} elseif ($_GET['action'] == "add") {
    addUser();
}

function readJSON() {

    if (!file_exists("users.json")) {
        echo "JSON file not found!";
        exit;
    }

    $json = file_get_contents("users.json");
    $users = json_decode($json, true);

    if (!$users) {
        echo "No users found!";
        return;
    }

    foreach ($users as $u) {
        echo "<p>
            <strong>ID:</strong> {$u['id']}<br>
            <strong>Name:</strong> {$u['name']}<br>
            <strong>Email:</strong> {$u['email']}
        </p><hr>";
    }
}
function addUser() {

    $name = $_POST['name'];
    $email = $_POST['email'];
    if (!file_exists("users.json")) {
        file_put_contents("users.json", "[]");
    }
    $json = file_get_contents("users.json");
    $users = json_decode($json, true);

    $newId = count($users) + 1;

    $users[] = [
        "id" => $newId,
        "name" => $name,
        "email" => $email
    ];
    file_put_contents("users.json", json_encode($users, JSON_PRETTY_PRINT));

    echo "<span style='color: green;'>User added successfully!</span>";
}
?>
