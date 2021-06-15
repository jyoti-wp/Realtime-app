<?php
$server = 'localhost';
$user = 'root';
$password = "root";
$dbname = 'chat';

$mysqli  = new mysqli($server, $user, $password, $dbname);

if ($mysqli->connect_errno) {
    echo "No Connection";
} else {
    echo "Connection Successful";
}
