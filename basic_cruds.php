<?php 
// require_once("./conn.php");

function add_user($conn, array $data){
    $sql= "INSERT INTO users(`name`,`email`,`password`,`role_id`,`file_path`)
        VALUES('$data[name]','$data[email]', '$data[password]','$data[role_id]','$data[file_path]')";
    $conn->query($sql);
    if ($conn->errno) {
        var_dump($conn);
        die;
    }
}

function update_user($conn, $data){
    $sql ="UPDATE users SET `name` = '$data[name]', 
                `email` =  '$data[email]',
                `password` =  '$data[password]'
                WHERE `id`= '$data[id]'";
    $conn->query($sql);
}


function delete_user($conn, $data){
    
    $sql = "DELETE FROM users
            WHERE `id` = '$data[id]'";
    $conn->query($sql);
}

function get_all_users($conn){
    $sql = "SELECT * FROM users";
    return $conn->query($sql);
}


function get_user_by_email($conn, $email){
    $sql = "SELECT * FROM users WHERE `email` = '$email'";
    return $conn->query($sql);
}