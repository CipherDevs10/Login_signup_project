<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGN UP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="signUp">
        <h3>Register!</h3>
        <form action="sign_up.php" method="post">
            <input id="tf_FirstName_SU" type="text"     name="tf_FirstName_SU" placeholder="First Name" required><br><br>
            <input id="tf_LastName_SU"  type="text"     name="tf_LastName_SU" placeholder="Last Name" required><br><br>
            <input id="tf_Username_SU"  type="text"     name="tf_Username_SU" placeholder="Username" required><br><br>
            <input id="tf_Email_SU"     type="email"    name="tf_Email_SU" placeholder="Email" required><br><br>
            <input id="tf_Birthday_SU"  type="date"     name="tf_Birthday_SU" required><br><br>
            <input id="tf_Password_SU"  type="password" name="tf_Password_SU" placeholder="Password" required><br><br>
            <input id="tf_rePassword_SU"type="password" name="tf_rePassword_SU" placeholder="Re-enter Password" required><br><br>

            <button type="submit" name="btn_SignUp" id="btn_SignUp">SIGN UP</button><br><br>
            <label >if you have an account</label> <a href="log_in.php">LOG IN</a>
        </form>
    </div>
    <?php
    ini_set('display_errors', 0);
    error_reporting(0);
    include('connect.php');
    if (isset($_POST["btn_SignUp"])) {


        $su_var_firstName = $_POST['tf_FirstName_SU'];
        $su_var_lastName = $_POST['tf_LastName_SU'];
        $su_var_username = $_POST['tf_Username_SU'];
        $su_var_email = $_POST['tf_Email_SU'];
        $su_var_birthday = $_POST['tf_Birthday_SU'];
        $su_var_Password = $_POST['tf_Password_SU'];
        $su_var_rePassword = $_POST['tf_rePassword_SU'];


        if ($su_var_Password !== $su_var_rePassword) {
            echo "Passwords do not match!";
            exit;
        }
        $checkIfExist = "select * from users where username = '$su_var_username' and email = '$su_var_email'";
        $finalCheck = mysqli_query($connection, $checkIfExist);
        if (mysqli_num_rows($finalCheck) > 0) {

            echo "<p style='color:red;'>email or user already exist</p>";
            
        }

        $fillingDATA = "INSERT INTO users (username,email,first_name,last_name,birthday,password) VALUES ('$su_var_username','$su_var_email','$su_var_firstName','$su_var_lastName','$su_var_birthday','$su_var_Password')";

        $connectionAndFilling = mysqli_query( $connection, $fillingDATA);
        if ($connectionAndFilling) {
            echo "new user added";
        } else {
            echo "not added";
        }
    }

    ?>



   

</body>

</html>