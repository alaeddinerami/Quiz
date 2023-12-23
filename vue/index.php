<?php
require_once('../config/db.php');
session_start();

if (isset($_POST['start'])) {
    $_SESSION['pseudo_name'] = $_POST['pseudo_name'];
    header('location: quiz.php');
    exit; // Make sure to exit after a header redirect
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Start</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-cover bg-center bg-no-repeat bg-fixed backdrop-brightness-50 bg-[url('../images/2020_07_what_is_aws.jpg')]">
    <section class="h-screen flex  items-center justify-around flex-col">
        <img src="../images/quizx-removebg-preview.png" class="h-1/5 w-1/5" alt="">
        <h1 class=" text-white text-2xl">"Let's embark on a journey of knowledge <br> and fun with our exciting quiz adventure!"</h1>

        <form method="post" class="w-1/4 h-1/5 p-6 bg-blue-900 bg-opacity-20 rounded-md shadow-md flex flex-col justify-between">
            <input type="text" name="pseudo_name" class="mt-1 p-2 w-full border-2 border-gray-300 rounded-md focus:outline-none focus:border-am-500" placeholder="Your Pseudo Name">
            <button type="submit" name="start" class="mt-4 px-4 py-2 bg-amber-500 text-white rounded-md hover:bg-amber-700 focus:outline-none focus:bg-amber-700">Start</button>
        </form>

        <footer class=" text-white p-4 text-center">
            <p>&copy; 2023 QuizX. All rights reserved.</p>
        </footer>
    </section>
</body>

</html>