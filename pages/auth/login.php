<?php
session_start();
include('../../db/connection.php');

$loginError = false;

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($db, "select * from users where email='$email' and password= '$password'");
    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_array($query);
        
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['email'] = $email;

        header("Location:/marketing/index.php");
    } else {
        $loginError = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlphaHub - Login</title>

    <link rel="shortcut icon" href="../../favicon.svg" type="image/svg+xml">

    <!-- Google Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@500;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        .form-input {
            transition: box-shadow 0.3s;
        }

        .form-input:focus {
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>

<body class="bg-gray-100">
    <!-- Register Form -->
    <div class="min-h-screen bg-gray-100 text-gray-900 flex justify-center">
        <div class="max-w-screen-xl m-0 sm:m-10 bg-white shadow sm:rounded-lg flex justify-center flex-1">
            <div class="lg:w-1/2 xl:w-5/12 p-6 sm:p-12">
                <div class="mt-12 flex flex-col items-center">
                    <h1 class="text-2xl xl:text-3xl font-extrabold">
                        Login for
                        <a href="../../index.php">AlphaHub</a>
                    </h1>
                    <div class="w-full flex-1 mt-8">
                        <div class="my-12 border-b text-center">
                            <div class="leading-none px-2 inline-block text-sm text-gray-600 tracking-wide font-medium bg-white transform translate-y-1/2">
                                Don't have an account
                                <a href="signup.php" class="font-bold underline">Signup here</a>
                            </div>
                        </div>

                        <div class="mx-auto max-w-xs">

                            <form action="" method="post">
                                <input id="email" class="form-input w-full px-8 py-4 rounded-lg font-medium bg-gray-100
                            border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400
                            focus:bg-white mt-5" type="email" placeholder="Email" name="email" required />

                                <input id="password" class="form-input w-full px-8 py-4 rounded-lg font-medium bg-gray-100
                            border border-gray-200 placeholder-gray-500 text-sm focus:outline-none focus:border-gray-400
                            focus:bg-white mt-5" type="password" placeholder="Password" name="password" required />

                                <button class="mt-5 tracking-wide font-semibold bg-indigo-500 text-gray-100 w-full py-4
                              rounded-lg hover:bg-indigo-700 transition-all duration-300 ease-in-out flex items-center
                              justify-center focus:shadow-outline focus:outline-none" type="submit" name="submit">
                                    <svg class="w-6 h-6 -ml-2" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2" />
                                        <circle cx="8.5" cy="7" r="4" />
                                        <path d="M20 8v6M23 11h-6" />
                                    </svg>
                                    <span class="ml-3">
                                        Login
                                    </span>
                                </button>

                                <?php if ($loginError) : ?>
                                    <div class="mt-3 text-center bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                                        <strong class="font-bold">Error!</strong>
                                        <span class="block sm:inline">Invalid email or password.</span>
                                    </div>
                                <?php endif; ?>
                            </form>

                            <p class="mt-6 text-xs text-gray-600 text-center">
                                I agree to accept the
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Terms of Service
                                </a>
                                and its
                                <a href="#" class="border-b border-gray-500 border-dotted">
                                    Privacy Policy
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex-1 bg-indigo-100 text-center hidden lg:flex">
                <div class="m-12 xl:m-16 w-full bg-contain bg-center bg-no-repeat" style="background-image: url('https://storage.googleapis.com/devitary-image-host.appspot.com/15848031292911696601-undraw_designer_life_w96d.svg');">
                </div>
            </div>
        </div>
    </div>
</body>

</html>