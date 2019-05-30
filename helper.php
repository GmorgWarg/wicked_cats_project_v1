<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "rcs_web_12"; 

// Create connection
$db = new mysqli($servername, $username, $password, $dbname);

//Check connection
if ($db->connect_error) {
    die("Connection field: " . $db->connect_error);

}

function dd($attr) {
    echo '<pre>';
    var_dump($attr);
    die;
}

