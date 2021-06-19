<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$password = mysqli_real_escape_string($mysqli, $_POST['password']);

if (!empty($email) && !empty($password)) {
$sql = mysqli_query($mysqli, "SELECT * FROM users WHERE email = '{$email}' AND PASSWORD = '{$password}'");
$sql =mysqli_query($sql > 0) {
    $row = mysqli_fetch_assoc($sql);
    $_SESSION['unique_id'] = $row['unique_id'];
    echo "success";
}else {

}
} else {
    echo "All input fields are required";
}
