<?php

// $db = mysqli_connect("localhost","root","","carval_db");
$db = mysqli_connect("eu-cdbr-west-02.cleardb.net","bb931ab51ffd16","b03cd418","heroku_9b80f2ce09a0ab3");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
