<?php
    // Starts the session.
    session_start();
?>

<!-----HEADER----->
<?php 
    $customtitle = "About us";
    $customstyle = "about.css";
    include "header.php";
?>
<!-----ABOUT----->
<div class="container">
    <div class="row">
        <!-----Left Column----->
        <div class="col">
            <!-----Description----->
            <h3 class ="h3-text">This is a title</h1>
            <p class="p-text">
                This is the first line of a text.<br>
                This is the second line of a text.
            </p>
            <a href="" class="pink-button">Explore now</a>    
        </div>
        <!-----Right Column----->
        <div class="col">
            <!-----Image----->
            <img src="images/about.jpg">
        </div>
    </div>
</div>
<!-----FOOTER----->
<?php include "footer.php"?>