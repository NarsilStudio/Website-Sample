<?php
    // Starts the session.
    session_start();
?>

<!-----HEADER----->
<?php 
    $customtitle = "Contact us";
    $customstyle = "contact.css";
    include "header.php";
?>
<!-----LOCATION----->
<section class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2486.347734198475!2d6.889163015767946!3d51.451771679626034!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8c19725c2d109%3A0xa5869978fa1ea332!2sZehntweg%20182%2C%2045475%20M%C3%BClheim%20an%20der%20Ruhr!5e0!3m2!1sfr!2sde!4v1656304222197!5m2!1sfr!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>
<!-----CONTACT----->
<section class="container">
    <div class="row">
        <!-----Left Columm----->
        <div class="col">
            <!-----Address----->
            <div>
                <i class="fa fa-home"></i>
                <span>
                    <h6 class="h6-text">Zehntweg 182, 45475 Mülheim an der Ruhr</h5>
                    <p class="p-text">Nordrhein Westfalen, Deutschland</p>
                </span>
            </div>
            <!-----Phone----->
            <div>
                <i class="fa fa-phone"></i>
                <span>
                    <h6 class="h6-text">+49 0123 0123 123</h5>
                    <p class="p-text">Montag bis Freitag, von 8 bis 16 Uhr.</p>
                </span>
            </div>
            <!-----Email----->
            <div>
                <i class="fa fa-envelope-o"></i>
                <span>
                    <h6 class="h6-text">example@gmail.com</h5>
                    <p class="p-text">Senden Sie uns Ihre Fragen.</p>
                </span>
            </div>
        </div>
        <!-----Right Column----->
        <div class="col">
            <form action="contact-form.php" method="post">
                <!-----User name----->
                <input type="text" name="name" placeholder="Enter your name" required>
                <!-----User email----->
                <input type="email" name="email" placeholder="Enter your email Address" required>
                <!-----Message subject----->
                <input type="text" name="subject" placeholder="Enter your subject" required>
                <!-----Message content----->                
                <textarea rows="8" name="message" placeholder="Message" required></textarea>
                <!-----Submit button----->                    
                <button type="submit" class="form-button">Send Message</button>
            </form>
        </div>
    </div>
</section>
<!--FOOTER-->
<?php include "footer.php"?>