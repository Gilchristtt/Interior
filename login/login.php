<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Chore Interior Design</title>
    <script defer src="../js/login-script.js"></script>
    <link rel="stylesheet" href="../css/login-style.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <!-- Corrected the form tag placement and added method and action attributes -->
            <form action="../actions/login_actions.php" method="POST">
               <h3>You need to Login to Book a session</h3>
                <h2>Login</h2>

              
                <label for="username">Email:</label>
                <!-- Added name attribute -->
                <input type="text" id="email" name="email" placeholder=" Enter valid email address "required/>

                <label for="password">Password:</label>
                <!-- Added name attribute -->
                <input type="password" id="password" name="password" placeholder=" Enter your password" required/>

                <!-- Added name attribute to the button for identification -->
                <button type="submit" name="login">Login</button>
                <p class="signup">Don't have an account? <a href="./register.php">Sign Up</a></p>
            </form>
        </div>
    </div>
    <script src="../js/login_validation.js"></script>

</body>
</html>

