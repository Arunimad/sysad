<?php

define('DB_NAME', 'my');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_HOST', 'localhost');

$link = mysql_connect(DB_HOST, DB_USER, DB_PASS);

if (!$link) {
    dir('There was a problem when trying to connect to the host. Please contact Tech Support. Error: ' . mysql_error());    
}

$db_selected = mysql_select_db(DB_NAME, $link);

if (!$link) {
    dir('There was a problem when trying to connect to the database. Please contact Tech Support. Error: ' . mysql_error());    
}

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['passwod'];


$sql = "INSERT INTO mytable (name,email,password) VALUES ('$name', '$email', '$password')";

if (!mysql_query($sql)) {
    die('Error: ' . mysql_error()); 
}

?>
