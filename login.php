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
        <section class="form Login">
            <header>Realtime Chat App</header>
            <form action="#">
                <div class="error-text"></div>
                <div class="field input">
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Enter your email!" required>
                </div>
                <div class="field input">
                    <label>Password</label>
                    <input type="text" name="password" placeholder="Enter your password" required>
                    <i class="fa fa-eye"></i>
                </div>

                <div class="field button">
                    <input type="submit" placeholder="Submit" value="Continue to chat">
                </div>
            </form>
            <div class="link">Not yet Signed up? <a href="index.php ">Sing up now!</a></div>
        </section>
    </div>
    <script src="javascript/show-hide.js"></script>
    <script src="javascript/login.js"></script>
</body>

</html>