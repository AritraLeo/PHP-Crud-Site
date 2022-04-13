<?php

require_once("connection.php");

if (isset($_POST['update'])) {
    $UserID = $_GET['ID'];
    $UserName = $_POST['name'];
    $UserEmail = $_POST['email'];
    $UserPhone = $_POST['phone'];

    $query = " update users set name = '" . $UserName . "', email='" . $UserEmail . "', phone='" . $UserPhone . "' where id='" . $UserID . "'";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("location:view.php");
    } else {

        echo ' Please Check Your Query ';
    }
} else {
    header("location:view.php");
}
