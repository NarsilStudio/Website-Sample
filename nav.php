<!-----Script----->
<script src="nav.js"></script>
<!-----Background----->
<section class="background">
    <!-----Navigation----->                
    <nav>
        <!-----Website Icon----->
        <a href="index.php" class="h3-text">PUMA</a>
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
                <!-----Language----->
                <li>
                    <select name="language" class="icon-menu">
	                    <option value="EN" selected>English</option>
	                    <option value="FR">French</option>
                        <option value="GE">German</option>
                    </select>
                </li>
            </ul>
        </div>
        <i class="fa fa-bars" onclick="showmenu()"></i>
    </nav>
</section>