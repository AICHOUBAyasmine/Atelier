<?php
include_once "config.php";
$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $sql = mysqli_query($conn, "SELECT email From chat_users WHERE email ='{$email}'");
        $sql2 = mysqli_query($conn, "INSERT INTO chat_users ('userid, 'firstname','lastname', 'email','password', 'image')
                            VALUES()");
        if (mysqli_num_rows($sql) > 0) {
            echo "$email this email elready exist";
        } else {
            if (isset($_FILES['file'])) {
                # code...
            } else {
                echo "please select a image file";
            }
        }
    } else {
        echo "$email this is not a valid email";
    }
} else {
    echo "all input field are reqired";
}
