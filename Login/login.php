<?php

session_start();

include("../include/db.php");
include("../include/functions.php");

if (isset($_POST['submit'])) {

    global $db;

    $customer_email = $_POST['email'];

    $customer_password = $_POST['password'];

    $encrypted_password = hash("sha1", $customer_password);

    $select_customer = "SELECT * FROM customers WHERE customer_email= '$customer_email' AND customer_password= '$encrypted_password'";

    $run_customer = mysqli_query($db, $select_customer);
    
    if($run_customer){
        $check_customer = mysqli_num_rows($run_customer);

        if ($check_customer == 0) {
    
            echo "<script>alert('Email o contraseña incorrectos')</script>";
    
            exit();
        } else {
    
            $_SESSION['customer_email'] = $customer_email;
    
            $get_customer_name = "SELECT `customer_name` FROM customers WHERE `customer_email`='$customer_email'";

            $customer_name = mysqli_fetch_array(mysqli_query($db, $get_customer_name))['customer_name'];
    
            $_SESSION['customer_name'] = $customer_name;
    
    
    
            echo "<script>alert('Has iniciado sesión')</script>";
    
            echo "<script>window.open('customer_menu.php','_self')</script>";
        }
    }   
}
