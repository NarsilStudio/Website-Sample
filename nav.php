<!-----Script----->
<script src="nav.js"></script>
<!-----Background----->
<section class="background">
    <!-----Navigation----->                
    <nav>
        <!-----Website Icon----->
        <h3 class="h3-text">PUMA</h6>
        <!-----Website Menu----->
        <div class ="nav-links" id="navLinks">
            <i class="fa fa-times" onclick="hidemenu()"></i>
            <ul>
                <!-----Home Button----->
                <li><a href="index.php">HOME</a></li>
                <!-----About Button----->
                <li><a href="about.php">ABOUT</a></li>
                <!-----Contact Button----->
                <li><a href="contact.php">CONTACT</a></li>
                <?php
                    if(!isset($_SESSION["userid"]))
                    {
                        /*Register Button*/
                        echo "<li><a href=register.php>REGISTER</a></li>";
                        /*Login Button*/
                        echo "<li><a href=login.php>LOG IN</a></li>";
                    }

                    else
                    {
                        /*Profil Button*/
                        echo "<li><a href=profil.php>PROFIL</a></li>";
                        /*Logout Button*/
                        echo "<li><a href=logout.php>LOG OUT</a></li>";
                    }
                ?>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>
</section>