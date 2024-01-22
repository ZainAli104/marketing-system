<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaHub - About Us</title>

    <link rel="shortcut icon" href="../favicon.svg" type="image/svg+xml">

    <link rel="stylesheet" href="../assets/css/style.css">

    <!--
      - google font link
    -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap"
          rel="stylesheet">
</head>

<body>

<!--
- #HEADER
-->

<?php
include('../components/header.php');
?>

<main>
    <article>
        <!--
          - #ABOUT
        -->
        <?php include('../components/about.php'); ?>


        <!--
          - #CTA
        -->
        <?php include('../components/cta.php'); ?>

        <!--
          - #CONTACT
        -->
        <?php include('../components/contact.php'); ?>

    </article>
</main>


<!--
- #FOOTER
-->
<?php include('../components/footer.php'); ?>

<!--
- #BACK TO TOP
-->

<a href="#top" data-back-top-btn class="back-top-btn">
    <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
</a>

<!--
- custom js link
-->
<script src="../assets/js/script.js" defer></script>

<!--
- ionicon link
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>