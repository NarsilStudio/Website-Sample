<?php
    // Starts the session.
    session_start();
    
    // Checks if the user is not logged in.
    if(!isset($_SESSION["userid"]))
    {
        // Redirects the user to the login page.
        header("location: login.php");
        exit;
    }
?>

<!-----HEADER----->
<?php 
    $customtitle = "Profil";
    $customstyle = "profil.css";
    include "header.php";
?>
<!-----PROFIL----->
<div class="container">
    <div class="row">
        <div class="col">
            <!-----Email----->
            <div class="row">
                <label>Email: </label>
                <label><?php echo ($_SESSION["email"]); ?></label>
            </div>
            <!-----Last name-----> 
            <div class="row">
                <label>Last name: </label>
                <label><?php echo ($_SESSION["lastname"]); ?></label>
            </div>
            <!-----First name----->   
            <div class="row">
                <label>First name: </label>
                <label><?php echo ($_SESSION["firstname"]); ?></label>
            </div>
            <!-----Gender----->   
            <div class="row">
                <label>Gender: </label>
                <label><?php echo ($_SESSION["gender"]); ?></label>
            </div>
            <!-----Age----->   
            <div class="row">
                <label>Age: </label>
                <label>
                    <?php
                        $age = date_diff(date_create($_SESSION["birthdate"]), date_create("today"))->y;
                        echo "$age years old.";
                    ?>
                </label>
            </div>                          
        </div>   
    </div>
</div>
<!-----FOOTER----->
<?php include "footer.php"?>