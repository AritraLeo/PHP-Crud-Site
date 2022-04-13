<?php

require_once("connection.php");

if (isset($_POST['submit'])) {

    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone'])) {
        echo ' Please Fill in the Blanks ';
    } else {
        $UserName = $_POST['name'];
        $UserEmail = $_POST['email'];
        $UserPhone = $_POST['phone'];

        $result2 = mysqli_query($con, "SELECT id FROM users where email = '" . $UserEmail . "' ");
        if (mysqli_num_rows($result2) > 0) {
            echo 'Email already exists!';
        }
        // If email doesn't exist : 
        else {

            $query = " insert into users (name, phone, email, dt) values('$UserName','$UserPhone','$UserEmail', current_timestamp())";
            $result = mysqli_query($con, $query);

            if ($result) {
                header("location:view.php");
            } else {
                echo '  Please Check Your Query ';
            }
        }
    }
} else {
    header("location:index.php");
}
