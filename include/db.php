<?php

// $db = mysqli_connect("localhost","root","","carval_db");
$db = mysqli_connect("eu-cdbr-west-02.cleardb.net","bd1a605d69c91e","baed219d","heroku_2a5a2e1723b521d");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
