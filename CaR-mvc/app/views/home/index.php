<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaR</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>

    <header>
        <div class="header-top">
            <div class="logo">
                <img src="../images/logo.png" alt="logo">
                <h3>Cat Race</h3>
            </div>

            <button class="form-btn" onclick="openForm()">
                Login</button>
        </div>


        <nav class="top-menu">
            <a href="../race/index"> Cat </a>
            <a href="../race/index"> Tiger </a>
            <a href="../race/index"> Puma </a>
            <a href="../race/index"> Cheetah </a>
            <a href="../race/index"> Jaguar </a>
        </nav>
    </header>

    <footer>
        <h3>Welcome to the cat family - Join us in a cat race</h3>
        <a class="btn" href="../race/live_races">Bet on a cat</a>
    </footer>


    <div class="form-popup" id="formPopup">
        <form method="POST" action="../home/login" class="form-container" id="loginContainer">
            <h2>Login</h2>

            <label for="username"><b>Username</b></label>
            <input type="text" name="username" placeholder="Enter your username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Enter your password" required>
            <div class="description">
                Don't have an account?
                <span class="form-link" onclick="goRegister()">Register now!</span>
            </div>


            <button type="submit" class="btn">Login</button>


            <button type="button" class="btn" onclick="closeForm()">Close</button>
        </form>

        <form method="POST" action="../home/register" class="form-container" id="registerContainer">
            <h2>Sign Up</h2>

            <label for="email"><b>Email</b></label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>


            <label for="username"><b>Username</b></label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <div class="description">
                Already have an account?
                <span class="form-link" onclick="goLogin()">Log in now!</span>
            </div>


            <button type="submit" class="btn">Sign Up</button>


            <button type="button" class="btn" onclick="closeForm()">Close</button>
        </form>
    </div>

    <script src="../js/form-script.js"> </script>
</body>

</html>
