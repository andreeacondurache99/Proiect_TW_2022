<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/race-style.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/schedule-style.css">
    <title>Schedule</title>
</head>

<body>

    <header>
        <div class="header-top">
            <div class="logo">
                <img src="../images/logo.png" alt="logo">
                <h3>Cat Race</h3>
            </div>

            <?php if ($data["user"] == null) { ?>
                <button class="form-btn" onclick="openForm()">
                    Login</button>
            <?php } else if ($data["user"]->username != null) { ?>
                <div>
                    <a href="../profile/index" class="form-btn">Profile</a>
                    <a href="../profile/logout" class="form-btn">Logout</a>
                </div>

            <?php }  ?>

        </div>
        <nav class="top-menu">
            <a href="../race/race/cat"> Cat </a>
            <a href="../race/race/tiger"> Tiger </a>
            <a href="../race/race/puma"> Puma </a>
            <a href="../race/race/cheetah"> Cheetah </a>
            <a href="../race/race/jaguar"> Jaguar </a>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="left">
                <!-- <div class="categories">
                    <h3>Categories</h3>
                    <a href="race.html">Small sized cats</a> <br>
                    <a href="race.html">Medium sized cats</a> <br>
                    <a href="race.html">Large cats</a> <br>
                </div> -->
                <div class="schedule">
                    <h3>Schedule </h3>
                    <a href="../race/schedule">Schedule</a> <br>
                    <a href="../race/live_races">Races</a> <br>

                </div>
            </div>
            <div class="right">
                <p> Get the report about our schedule! </p>

                <a href="../export/schedule.csv" class="btn" download="schedule.csv">Download CSV</a>
                <a href="../race/generateHTML" class="btn" download="schedule.html">Download HTML</a>
                <a href="../export/mark.md" class="btn" download="markdown.md">Download Markdown</a>
                <a href="../export/report.xml" class="btn" download="schedule.xml">Download XML</a>
                <a href="../export/calendar.ics" class="btn" download="schedule.ics">Download iCalendar</a>
                <!-- text/javascript" src="table-converter.js -->
            </div>
        </div>

    </main>


    <div class="form-popup" id="formPopup">
        <form method="POST" action="../race/login" class="form-container" id="loginContainer">
            <h2>Login</h2>

            <label for="username"><b>Username</b></label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <div class="description">
                Don't have an account?
                <span class="form-link" onclick="goRegister()">Register now!</span>
            </div>


            <button type="submit" class="btn">Login</button>


            <button type="button" class="btn" onclick="closeForm()">Close</button>
        </form>

        <form method="POST" action="../race/register" class="form-container" id="registerContainer">
            <h2>Sign Up</h2>

            <label for="email"><b>Email</b></label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>


            <label for="username"><b>Username</b></label>
            <input type="text" name="username" placeholder="Enter your username" required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" placeholder="Enter your password" required>
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