<?php
    require_once "config.php";
    require_once "session.php";

    $error = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"]))
    {
        $email = trim($_POST["email"]);
        $username = trim($_POST["username"]);
        $password = trim($_POST["password"]);
        $confirm_password = trim($_POST["confirm_password"]);
        $lastname = trim($_POST["lastname"]);
        $firstname = trim($_POST["firstname"]);
        $gender = trim($_POST["gender"]);
        $birthdate = trim($_POST["birthdate"]);

        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        if ($query = $db->prepare("SELECT * FROM informations WHERE email = ?"))
        {
            $query->bind_param("s", $email);
            $query->execute();
            $query->store_result();

            // Validate the email.
            if ($query->num_rows > 0)
            {
                $error .= '<p class="error">The email address is already registered.</p>';
            }

            else
            {
                // Validate the password.
                if (strlen($password) < 6)
                {
                    $error .= '<p class="error">The password must have atleast 6 characters.</p>';
                }
                
                // Validate the confirmation.
                if (empty($confirm_password))
                {
                    $error .= '<p class="error">Please confirm your password.</p>';
                }
                
                else
                {
                    if (empty($error) && ($password != $confirm_password))
                    {
                        $error .= '<p class="error">Password did not match.</p>';
                    }
                }

                // Register.
                if (empty($error))
                {
                    $insertQuery = $db->prepare("INSERT INTO informations (email, username, password, lastname, firstname, gender, birthdate) VALUES (?,?,?,?,?,?,?);"); 
                    $insertQuery->bind_param("sssssss", $email, $username, $password_hash, $lastname, $firstname, $gender, $birthdate);
                    $result = $insertQuery->execute();

                    if ($result)
                    {
                        $error .= '<p class="success">Your registration was succesful.</p>';
                    }

                    else
                    {
                        $error .= '<p class="error">Something went wrong.</p>';                       
                    }

                    $insertQuery->close();
                }
            }
        }

        $query->close();
        mysqli_close($db);
    }
?>

<!-----HEADER----->
<?php 
    $customtitle = "Sign up";
    $customstyle = "register.css";
    include "header.php";
?>
<!-----REGISTER----->
<div class="container">
    <h3>Register</h3>
    <p>Please fill this form to create an account.</p>
    <?php echo $error; ?>
    <!-----Formular----->
    <form action="" method="post">
        <div class="row">
            <!-----Left Column----->
            <div class="col">
                <!-----Email----->
                <div class="label-input">
                    <label>Email:</label>
                    <input type="text" name="email" class="form-input" required>
                </div>
                <!-----User name----->
                <div class="label-input">
                    <label>Username:</label>
                    <input type="text" name="username" class="form-input" required>
                </div>
                <!-----Password----->
                <div class="label-input">
                    <label>Password:</label>
                    <input type="text" name="password" class="form-input" required>
                </div>
                <!-----Confirm password----->
                <div class="label-input">
                    <label>Confirm password:</label>
                    <input type="text" name="confirm_password" class="form-input" required>
                </div>
            </div>
            <!-----Right Column----->
            <div class="col">
                <!-----Last name-----> 
                <div class="label-input">
                    <label>Last name:</label>
                    <input type="text" name="lastname" class="form-input" required>
                </div>
                <!-----First name----->   
                <div class="label-input">
                    <label>First name:</label>
                    <input type="text" name="firstname" class="form-input" required>
                </div>
                <!-----Gender----->   
                <div class="label-select">
                    <label>Gender:</label>
                    <select name="gender">
	                    <option value="male" selected>Male</option>
	                    <option value="female">Female</option>
                    </select>
                </div>
                <!-----Birthdate----->   
                <div class="label-date">
                    <label>Birthdate:</label>
                    <input type="date" name="birthdate" required>
                </div>                                        
            </div>                
        </div>
        <!-----Submit----->
        <input type="submit" name="submit" class="form-button" value="Submit">
        <p>Already have an account? <a href="login.php">Login here</a>.</p>    
    </form>
</div>
<!-----FOOTER----->
<?php include "footer.php"?>