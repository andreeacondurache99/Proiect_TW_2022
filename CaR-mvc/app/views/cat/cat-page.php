<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cat Profile</title>
    <link rel="stylesheet" href="../css/cat-page-style.css">
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
            <a href="race.html"> Cat </a>
            <a href="race.html"> Tiger </a>
            <a href="race.html"> Puma </a>
            <a href="race.html"> Cheetah </a>
            <a href="race.html"> Jaguar </a>
        </nav>
    </header>

    <div class="form-popup" id="formPopup">
        <form action="#" class="form-container" id="loginContainer">
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

        <form action="#" class="form-container" id="registerContainer">
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

    <main>
        <div class="container">
            <div class="profile">
                <div class="pfp">
                    <img src="https://s.iw.ro/gateway/g/ZmlsZVNvdXJjZT1odHRwJTNBJTJGJTJG/c3RvcmFnZWRpZ2lhbmltYWx3b3JsZC5y/Y3MtcmRzLnJvJTJGc3RvcmFnZSUyRjIw/MTklMkYwNSUyRjIxJTJGMTA3NTcyNl8x/MDc1NzI2X29jZWxvdC5qcGcmdz03ODAm/aD02MDAmemM9MSZoYXNoPWNlNGYxZDk0MDY2MTFiZmJhNWJlMjc0ZjlkYzFlZDVm.thumb.jpg"
                        alt="pfp">
                </div>
                <div class="info">
                    <h3>Name: felina</h3>
                    <p>Size: </p>
                    <p>Breed: </p>
                    <p>Avg. Ranking: 3.4</p>
                    <p>Number of podiums: 2</p>
                </div>

            </div>

            <div class="history">
                <table>
                    <tr>
                        <th>Race</th>
                        <th>Date</th>
                        <th>Result (position)</th>
                    </tr>
                    <tr>
                        <td>Race #1</td>
                        <td>13/04/2022</td>
                        <td> 4 </td>
                    </tr>
                    <tr>
                        <td>Race #2</td>
                        <td>07/04/2022</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>Race #3</td>
                        <td>04/04/2022</td>
                        <td>1</td>
                    </tr>

                </table>
            </div>
        </div>
    </main>


    <script src="form-script.js"> </script>
</body>

</html>