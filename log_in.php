<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>LOG IN</title>
</head>

<body>
    <div class="logIn">
        <h3>Enter Your Username And Password</h3>
        <form action="log_in.php" method="post">
            <input id="tfUsername" type="text" name="tfUsername" placeholder="Username" required> <br><br>
            <input id="tfPassword" type="password" name="tfPassword" placeholder="Password" required> <br><br>
            <button type="submit" id="btnLogIn" name="btnLogin">LOG IN</button><br><br>
        </form>
        <label>If you don't have an account</label> <a href="sign_up.php">Sign Up</a>
    </div>

    <?php
    ini_set('display_errors', 0);
    error_reporting(0);

    include('connect.php');
    if (isset($_POST['btnLogin'])) {
        $li_var_username = $_POST['tfUsername'];
        $li_var_password = $_POST['tfPassword'];

        $check = "SELECT * FROM users WHERE username = '$li_var_username' AND password = '$li_var_password'";
        $connectionAndCheck = mysqli_query($connection,  $check);
        if (mysqli_num_rows($connectionAndCheck) > 0) {

            header('Location: login.php');
            exit();
        }
        else {
            echo "<p style='color:red;'>Wrong password or user</p>";
        }
        
    }

    ?>


</body>

</html>