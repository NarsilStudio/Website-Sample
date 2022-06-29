<?php
    require_once "config.php";
    require_once "session.php";

    $error ="";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
    {
        $email = trim($_POST["email"]);
        $password = trim($_POST["password"]);

        // Validate the email.
        if (empty($email))
        {
            $error .= '<p class="error">Please enter your email.</p>';
        }

        // Validate the password.
        if (empty($password))
        {
            $error .= '<p class="error">Please enter your password.</p>';
        }

        if(empty($error))
        {
            $result = mysqli_query($db, "SELECT * FROM informations WHERE email = '$email'");
            $row = mysqli_fetch_assoc($result);

            if ($row)
            {
                if (password_verify($password, $row["password"]))
                {
                    $_SESSION["userid"] = $row["id"];
                    $_SESSION["email"] = $row["email"];
                    $_SESSION["username"] = $row["username"];
                    $_SESSION["lastname"] = $row["lastname"];
                    $_SESSION["firstname"] = $row["firstname"];
                    $_SESSION["gender"] = $row["gender"];
                    $_SESSION["birthdate"] = $row["birthdate"];

                    header("location: index.php");
                    exit;
                }
                
                else
                {
                    $error .= '<p class="error">The password is not valid.</p>';                       
                }
            }

            else
            {
                $error .= '<p class="error">No user exist with that email address.</p>';
            }
        }

        mysqli_close($db);
    }
?>

<!DOCTYPE html>
<!-----Header----->
<?php 
    $customtitle = "Sign in";
    $customstyle = "login.css";
    include "header.php";
?>
<!-----Formular----->
<div class="container">
    <h3>Login</h3>
    <p>Please fill in your email and password.</p>
    <?php echo $error?>
    <form action="" method="post">
        <div class="row">
            <div class="col">
                <!-----Email----->
                <div class="label-input">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-input" required>
                </div>
                <!-----Password----->
                <div class="label-input">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-input" required>
                </div>
                <!-----Submit----->
                <input type="submit" name="submit" class="form-button" value="Submit">
                <p>Don't have an account? <a href="register.php">Register here</a>.</p>                          
            </div>
        </form>
    </div>
</div>
<!-----Footer----->
<?php include "footer.php"?>