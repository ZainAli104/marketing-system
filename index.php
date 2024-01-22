<?php
include('db/connection.php');
session_start();
$firstName = $_SESSION['firstName'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaHub - We're available for marketing</title>

    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <link rel="stylesheet" href="./assets/css/style.css">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
</head>

<body>

    <!--
- #HEADER
-->

    <?php
    include('components/header.php');
    ?>

    <main>
        <article>
            <!--
          - #HERO
        -->

            <section class="section hero" id="home">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">AlphaHub Marketing Agency</p>

                        <h1 class="h1 hero-title">We are available for marketing</h1>

                        <p class="hero-text">
                            Generate Leads and Increase Revenue with the Best Marketing Agency. We are a full-service
                            digital.
                        </p>

                        <?php if ($firstName) : ?>
                            <a href="pages/services.php" class="btn btn-primary">Our Services</a>
                        <?php else : ?>
                            <a href="pages/auth/signup.php" class="btn btn-primary">Register Here</a>
                        <?php endif; ?>

                    </div>

                    <figure class="hero-banner">
                        <img src="./assets/images/hero-banner.png" width="720" height="673" alt="hero banner" class="w-100">
                    </figure>

                </div>
            </section>


            <!--
          - #SERVICE
        -->
            <?php include('components/services.php'); ?>

            <!--
          - #PROJECT
        -->
            <?php include('components/projects.php'); ?>

            <!--
          - #ABOUT
        -->
            <?php include('components/about.php'); ?>

            <!--
          - #CTA
        -->
            <?php include('components/cta.php'); ?>

            <!--
          - #CONTACT
        -->
            <?php include('components/contact.php'); ?>

        </article>
    </main>


    <!--
- #FOOTER
-->
    <?php include('components/footer.php'); ?>


    <!--
- #BACK TO TOP
-->

    <a href="#top" data-back-top-btn class="back-top-btn">
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>

    <!--
- custom js link
-->
    <script src="./assets/js/script.js" defer></script>

    <!--
- ionicon link
-->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>