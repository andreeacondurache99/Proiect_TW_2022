<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/race-style.css">
    <link rel="stylesheet" href="../css/user_dashUpc.css">

    <title>Cat Race</title>
</head>

<body>

    <header>
        <div class="header-top">
            <div class="logo">
                <img src="../images/logo.png" alt="logo">
                <h3>Cat Race</h3>
            </div>
            <div>
                <a href="../profile/index" class="form-btn">Profile</a>
                <a href="../profile/logout" class="form-btn">Logout</a>
            </div>            
            
        </div>


        <nav class="top-menu">
            <a href="../race/index"> Cat </a>
            <a href="../race/index"> Tiger </a>
            <a href="../race/index"> Puma </a>
            <a href="../race/index"> Cheetah </a>
            <a href="../race/index"> Jaguar </a>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="left">
                <div class="sidenav">
                    <h3>Name</h3>
                    <h3>Sold 1500$</h3><br>
                    <a href="user_dashUpc">Upcoming Bets</a>
                    <a href="user_dashHistory">History</a>
                    <button class="form-btn1" onclick="openForm()">
                        Settings</button>
                </div>

            </div>
            <div class="right">
                <div class="table_name">
                    <h2>History</h2>
                </div>
                <table>
                    <tr>
                        <th>Feline name</th>
                        <th>Breed</th>
                        <th>Date</th>
                        <th>Time</th>
                        <th>Money Win/loose</th>
                        <th>Odds</th>
                        
                    </tr>
                    <tr>
                        <td>Felina 1</td>
                        <td>sfinx</td>
                        <td>2022-12-14</td>
                        <td>14:00</td>
                        <td>+1300$</td>
                        <td>2.6</td>
                    </tr>
                    <tr>
                        <td>Felina 2</td>
                        <td>siameza</td>
                        <td>2022-12-14</td>
                        <td>14:00</td>
                        <td>-1300$</td>
                        <td>2.45</td>
                    </tr>
                    <tr>
                        <td>Felina 3</td>
                        <td>british shorthair</td>
                        <td>2022-12-14</td>
                        <td>14:00</td>
                        <td>+300$</td>
                        <td>1.48</td>
                    </tr>
                    <tr>
                        <td>Felina 1</td>
                        <td>sfinx</td>
                        <td>2022-12-14</td>
                        <td>14:00</td>
                        <td>+100$</td>
                        <td>1.78</td>
                    </tr>
                    <tr>
                        <td>Felina 2</td>
                        <td>siameza</td>
                        <td>2022-12-14</td>
                        <td>14:00</td>
                        <td>-130$</td>
                        <td>1.78</td>
                    </tr>
                    <tr>
                        <td>Felina 3</td>
                        <td>british shorthair</td>
                        <td>2022-12-14</td>
                        <td>14:00</td>
                        <td>+1300$</td>
                        <td>1.78</td>
                    </tr>

                </table>
            </div>
        </div>

    </main>

    <div class="form-popup" id="formPopup">
        <form method="POST" action="../profile/changePassword" class="form-container" id="loginContainer">
            <h2>Change Password</h2>

            <label for="old_password"><b>Old Password</b></label>
            <input type="password" id="old_password" name="password" placeholder="Enter your old password" required>

            <label for="new_password"><b>New Password</b></label>
            <input type="password" id="new_password" name="password" placeholder="Enter your new password" required>
            <button type="submit" class="btn">Change</button>
            <button type="button" class="btn" onclick="closeForm()">Close</button>
        </form>
    </div>
    <script src="form-script.js"> </script>

</body>

</html>
