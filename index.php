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
            <form action="#">
                <div class="error-text">This is an Error Message!</div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" placeholder="Last Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" placeholder="Enter your email!" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="password" placeholder="Enter your password" required>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image</label>
                    <input type="file" placeholder="Select an image">
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