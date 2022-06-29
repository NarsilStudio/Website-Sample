<?php
    // Starts the session.
    session_start();
?>

<!-----HEADER----->
<?php 
    $customtitle = "Home";
    $customstyle = "index.css";
    include "header.php";
?>
<!-----HOME----->
<section class="home">
    <div class="home-box">
        <h1 class="h1-text">This is a title</h1>
        <p class="p-text">
            This is the first line of a text.<br>
            This is the second line of a text.
        </p>
        <a href="about.php" class="white-button">Visit us to know more.</a>
    </div>
</section>
<!-----FOOTER----->
<?php include "footer.php"?>