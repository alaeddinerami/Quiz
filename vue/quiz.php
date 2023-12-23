<?php
// require("../controller/question.php");
session_start();
  if(empty($_SESSION["pseudo_name"])){
    header('location:index.php');
}else 
{
   $name= $_SESSION["pseudo_name"];
    echo $name;
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100 h-screen flex items-center justify-center">

    <div class="bg-white p-8 rounded-md shadow-md max-w-md w-full">

        <!-- Question -->
        <h2 class="text-2xl font-semibold mb-4">Question: What is the capital of France?</h2>

        <!-- Answer Options Form -->
        <form action="process_answer.php" method="post">

            <div class="grid grid-cols-2 gap-4">
                <!-- Option 1 -->
                <label>
                    <input type="radio" name="answer" value="paris" class="hidden">
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Paris</button>
                </label>

                <!-- Option 2 -->
                <label>
                    <input type="radio" name="answer" value="berlin" class="hidden">
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Berlin</button>
                </label>

                <!-- Option 3 -->
                <label>
                    <input type="radio" name="answer" value="madrid" class="hidden">
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Madrid</button>
                </label>

                <!-- Option 4 -->
                <label>
                    <input type="radio" name="answer" value="rome" class="hidden">
                    <button type="submit" class="py-2 px-4 bg-blue-500 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:bg-blue-700">Rome</button>
                </label>
            </div>

        </form>

    </div>

</body>

</html>
