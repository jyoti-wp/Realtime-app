<?php 
include_once "config.php"
$fname = mysqli_real_escape_string(($mysqli, $_POST[' fname']));
$lname = mysqli_real_escape_string(($mysqli, $_POST['lname']));
$email = mysqli_real_escape_string(($mysqli, $_POST['email']));
$password = mysqli_real_escape_string(($mysqli, $_POST['password']));

if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    if (filter_var($email, FILTER_VALIDATE_EMAIL));
    $sql = mysqli_query($mysqli, "SELECT email FROM users WHERE email = '{$email}'");
    if(mysqli_num_rows($sql) > 0) {  // if email exists 
        echo "$email - This email already exist!";
    } else {
        // lets check the image
        if(isset($_FILES['image'])) {
            $img_name = $_FILES['image']['name']; // get user updated image
            $img_type = $_FILES['iamge']['type']; // getting image type
            $tmp_name = $_FILES['image']['tmp_name'];  // name used to save file in our folders

            // let get the image extention

            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode); // to get an extention of the users uploaded image

            $extensions = ['png', 'jpeg', 'jpg'];  // valid extensions
            if(in_array($img_ext, $extensions) === true) {  // do this if the extension is matched
                $time = time(); // to return current time

                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name, "images/".$new_img_name )) {  //to move the image to our folder successfully
                    $status = "Active now"; // to show active status after logged in
                    $random_id = ran(time(), 10000000);

                    // inserting user data inside of a table
                    $sql2 = mysqli_query($mysqli, INSERT INTO users (`unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`);
                }
                
            } else {
                echo " Invalid Format";
            }
        } else {
            echo "Please select an image";
        } else {
            echo "Please select an image";
        } else {
            echo "Please select an image";
        }
    }
}else {
    echo "This email is not valid";
} else  {
    echo "All input fields are required!";
}


