<?php

/***
 * verificam butonu
 * validam datele
 * ne conectam la o baza de date
 * introducem date
 */


 if (isset($_POST["submit"])) {
    $errors = [];
    if (!isset($_POST["nume"]) || $_POST["nume"] == "")
        $errors["name"] = "NUMELE ESTE OBLIGATORIU";
    if (!isset($_POST["email"]) || $_POST["email"] == "")
        $errors["email"] = "Email ESTE OBLIGATORIU";
    if (!isset($_POST["mesaj"]) || $_POST["mesaj"] == "")
        $errors["message"] = "mesaj ESTE OBLIGATORIU";

    if (count($errors) != 0) {
        header("Location: ./contact.php?". http_build_query($errors));
        exit;
    }

    $server_name = "localhost";
    $user = "root";
    $pass = "";
    $db = "chestionare";
    $conn = new mysqli($server_name, $user, $pass, $db);
    if ($conn->connect_errno) {
        $errors["error"] = "Sorry, we could not process your request at this time. Please try again later.";
        header("Location: ./contact.php?". http_build_query($errors));
        exit;
    }

    $data = [
        "name" => htmlspecialchars($_POST["nume"]),
        "email" => htmlspecialchars($_POST["email"]),
        "message" => htmlspecialchars($_POST["mesaj"])
    ];   

    $sql = "INSERT INTO contacts(`name`,`email`,`message`)
        VALUES('$data[name]','$data[email]','$data[message]')";

    $conn->query($sql);
    if ($conn->errno) {
        $errors["error"] = "Sorry, we could not process your request at this time. Please try again later.";
        header("Location: ./contact.php?". http_build_query($errors));
        exit;
    }

    $errors["success"] = "Mesajul a fost trimis cu succes!";
    header("Location: ./contact.php?". http_build_query($errors));
    exit;

 }
 header("Location: ./contact.php");
 exit;