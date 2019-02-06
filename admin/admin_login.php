<?php 
    require_once 'scripts/config.php';
    if (empty($_POST['username']) || empty($_POST['password'])) {
        $message = 'Login Failed';
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $ip = $_SERVER['REMOTE_ADDR'];
        // var_dump($_POST);
        // die;
        $message = login($username, $password, $ip);
    }

    echo json_encode($message);
