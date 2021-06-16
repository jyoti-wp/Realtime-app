<?php 
include_once "config.php"
$fname = mysqli_real_escape_string(($mysqli, $_POST[' fname']));
$lname = mysqli_real_escape_string(($mysqli, $_POST['lname']));
$email = mysqli_real_escape_string(($mysqli, $_POST['email']));
$password = mysqli_real_escape_string(($mysqli, $_POST['password']));

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {

} else  {
    echo "All input fields are required!";
}

