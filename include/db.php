<?php

// $db = mysqli_connect("localhost","root","","carval_db");
$db = mysqli_connect("eu-cdbr-west-02.cleardb.net","b35268faebf5d7","f04c963b","heroku_a2d6bc5845573a1");

if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
