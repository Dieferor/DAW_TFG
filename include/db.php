<?php

$db = mysqli_connect("localhost","root","","carval_db");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
