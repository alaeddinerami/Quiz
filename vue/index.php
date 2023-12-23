<?php
require_once('../config/db.php');
session_start();
    if (isset($_POST['start'])){ 
        $_SESSION['pseudo_name']= $_POST['pseudo_name'];
        echo $_SESSION['pseudo_name'];
        header('location:quiz.php');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>start</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-cover bg-center bg-no-repeat bg-fixed flex justify-center items-center" style="background-image: url('../images/2020_07_what_is_aws.jpg')">
    <form method="post" class="max-w-md h-1/5 p-6 bg-blue-900 bg-opacity-20 rounded-md shadow-md flex flex-col justify-between">
        <!-- Use the 'placeholder' attribute to set the pseudo name -->
        <input type="text" name="pseudo_name" class="mt-1 p-2 w-full border-2 border-gray-300 rounded-md focus:outline-none focus:border-am-500" placeholder="Your Pseudo Name">
        <button type="submit" name="start" class="mt-4 px-4 py-2 bg-amber-500 text-white rounded-md hover:bg-amber-700 focus:outline-none focus:bg-amber-700">Start</button>
    </form>

</body>

</html>