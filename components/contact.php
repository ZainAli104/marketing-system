<?php
include('../db/connection.php');

$email = isset($_SESSION['email']) ? $_SESSION['email'] : '';
$responseMsg = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    mysqli_query($db, "insert into contact (name,email,subject,phone,message)Values('$name','$email','$subject','$phone','$message')");

    $responseMsg = "Your message has been sent successfully!";
}
?>

<section class="section contact" id="contact">
    <div class="container">

        <h2 class="h2 section-title">Let's Contact With Us</h2>

        <p class="section-text">
            We are available for 24/7 for your help. You can contact us anytime.
        </p>

        <form action="" method="post" class="contact-form">

            <div class="input-wrapper">
                <input type="text" name="name" placeholder="Your name*" required class="input-field">

                <input type="email" name="email" placeholder="Email address*" required class="input-field" value="<?php echo $email ?>" readonly>
            </div>

            <div class="input-wrapper">
                <input type="text" name="subject" placeholder="Subject" class="input-field">

                <input type="number" name="phone" placeholder="Phone number" class="input-field">
            </div>

            <textarea name="message" placeholder="Your message...*" required class="input-field"></textarea>

            <div class="checkbox-wrapper">
                <input type="checkbox" name="terms_and_policy" id="terms" required class="checkbox">

                <label for="terms" class="label">
                    Accept <a href="#" class="label-link">Terms of Services</a> and
                    <a href="#" class="label-link">Privacy Policy</a>
                </label>
            </div>

            <?php if ($email) : ?>
                <button type="submit" class="btn btn-primary" name="submit">Send Message</button>
                <p style="color: green;"><?php echo $responseMsg; ?></p>
            <?php else : ?>
                <a href="/marketing/pages/auth/login.php" class="btn btn-primary">Please Login First</a>
            <?php endif; ?>

        </form>

        <ul class="contact-list">

            <li class="contact-item">
                <div class="contact-card">

                    <div class="card-icon">
                        <ion-icon name="mail-outline"></ion-icon>
                    </div>

                    <div class="card-content">

                        <h3 class="h3 card-title">Mail Here</h3>

                        <a href="mailto:chzainali6363@gmail.com" class="card-link">chzainali6363@gmail.com</a>
                        <a href="mailto:mohsin@gmail.com" class="card-link">mohsin@gmail.com</a>

                    </div>

                </div>
            </li>

            <li class="contact-item">
                <div class="contact-card">

                    <div class="card-icon">
                        <ion-icon name="map-outline"></ion-icon>
                    </div>

                    <div class="card-content">

                        <h3 class="h3 card-title">Visit Here</h3>

                        <address class="card-address">
                            MNS-UAM, Multan,<br>
                            Punjab, Pakistan
                        </address>

                    </div>

                </div>
            </li>

            <li class="contact-item">
                <div class="contact-card">

                    <div class="card-icon">
                        <ion-icon name="headset-outline"></ion-icon>
                    </div>

                    <div class="card-content">

                        <h3 class="h3 card-title">Call Here</h3>

                        <a href="tel:+923209642852" class="card-link">+92 3209642852</a>
                        <a href="tel:+923176543471" class="card-link">+92 3176543471</a>

                    </div>

                </div>
            </li>

        </ul>

    </div>
</section>