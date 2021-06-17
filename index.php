<?php
session_start();
if (isset($_SESSION['unique_id'])) {
    header("location: user.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <title>Real Time Chat App</title>
</head>

<body>
    <div class="wrapper">
        <section class="form signup">
            <header>Realtime Chat App</header>
            <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
                <div class="error-text"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email!" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="current-password" name="password" placeholder="Enter your password" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" name="image" placeholder="Select an image" require>
                </div>
                <div class="field button">
                    <input type="submit" placeholder="Submit" value="Continue to chat">
                </div>
            </form>
            <div class="link">Already Signed up? <a href="login.php">Login now</a></div>
        </section>
    </div>
    <script src="javascript/show-hide.js"></script>
    <script src="javascript/signup.js"></script>
</body>

</html>