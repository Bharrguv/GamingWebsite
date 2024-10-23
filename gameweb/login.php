<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unreal Games - Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
</head>
<body>

    <div class="login-container">
        <div class="login-box">
            <!-- Logo at the top -->
            <div class="logo-container">
                <img src="UNREAL GAMES LOGO.png" alt="Unreal Games Logo" class="logo">
                <h1>Login</h1>
            </div>
            
            <!-- Login Form -->
            <form class="login-form" action="validate_login.php" method="POST">
                <div class="input-group">
                    <input type="email" name="email" placeholder="username@gmail.com" required>
                </div>
                <div class="input-group">
                    <input type="password" name="password" placeholder="Password" required>
                    <i class='bx bx-hide'></i>
                </div>
                <div class="forgot-password">
                    <a href="#">Forgot Password?</a>
                </div>
                <button type="submit" class="btn-login">Login</button>
            </form>
            
            
            <!-- Continue with -->
            <div class="continue-with">
                <p>Or Continue With</p>
                <div class="social-login">
                    <a href="https://www.google.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c1/Google_%22G%22_logo.svg/225px-Google_%22G%22_logo.svg.png" alt="Google"></a>
                    <a href="https://github.com/"><img src="https://github.githubassets.com/images/modules/logos_page/GitHub-Mark.png" alt="Github"></a>
                    <a href="https://www.facebook.com/"><img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook"></a>
                </div>
            </div>

            <!-- Register -->
            <div class="register">
                <p>Don’t have an account yet? <a href="signup.html">Register for free</a></p>
                <p><a href="index.html">Back to HOME</a></p>
            </div>
        </div>
    </div>

</body>

</html>
