<?php
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: /marketing/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<body>
    <header class="header" data-header>
        <div class="container">

            <a href="/marketing/index.php" class="logo">AlphaHub</a>

            <nav class="navbar container" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="/marketing/index.php" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="/marketing/pages/services.php" class="navbar-link" data-nav-link>Services</a>
                    </li>

                    <li>
                        <a href="/marketing/pages/projects.php" class="navbar-link" data-nav-link>Project</a>
                    </li>

                    <li>
                        <a href="/marketing/pages/about.php" class="navbar-link" data-nav-link>About Us</a>
                    </li>

                    <li>
                        <a href="/marketing/pages/contact.php" class="navbar-link" data-nav-link>Contact Us</a>
                    </li>

                    <?php if ($firstName) : ?>
                        <li>
                            <a href="#" class="btn btn-primary"><?php echo $firstName ?></a>
                        </li>

                        <li>
                            <form method="post">
                                <button type="submit" name="logout" class="btn btn-secondary">Logout</button>
                            </form>
                        </li>
                    <?php else : ?>
                        <li>
                            <a href="/marketing/pages/auth/login.php" class="btn btn-primary">Login</a>
                        </li>
                    <?php endif; ?>

                </ul>
            </nav>

            <button class="nav-toggle-btn" data-nav-toggler>
                <ion-icon name="menu-outline" class="open"></ion-icon>
                <ion-icon name="close-outline" class="close"></ion-icon>
            </button>

        </div>
    </header>

</body>

</html>