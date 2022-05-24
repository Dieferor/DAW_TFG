<?php
session_start();

include("../include/db.php");
include("../include/functions.php");

if (isset($_POST['submit'])) {

    global $db;
    $customer_email = $_POST['email'];
    $customer_name = $_POST['name'];
    $customer_password = $_POST['password'];
    $encrypted_password = hash("sha1", $customer_password);

    $sql = "INSERT INTO customers VALUES (DEFAULT,'$customer_name', '$customer_email', '$encrypted_password')";

    $check_signup = mysqli_query($db, $sql);
    
    if ($check_signup) {    
        $filas = mysqli_affected_rows($db);

        if ($filas > 0) {
            echo "<script>alert('Alta realizada correctamente')</script>";
            header("Location:../index.php");
        } else {
            echo "<script>alert('Alta no realizada')</script>";
        }
    } else {        
        $error = mysqli_error($db);
        echo $error;
    }
    mysqli_close($db);
}

