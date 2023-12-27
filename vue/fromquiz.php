


<?php
require("../controller/question.php");

foreach ($questions as $question) {
    // Display the question
    echo '<div class="text-white">' . $question['Question'] . '</div>';

    // Assuming $answerOptions is an array of answer options (e.g., A, B, C)
    foreach ($answerOptions as $option) {
        $answerColumn = 'answer_' . $option;
        $inputId = 'hosting-' . strtolower($option);

        echo '<div>';
        echo '<input type="radio" id="' . $inputId . '" name="hosting" value="' . $inputId . '" class="hidden peer" required>';
        echo '<label for="' . $inputId . '" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">';
        echo '<div class="block">';
        echo '<div class="w-full text-lg font-semibold">' . $question[$answerColumn] . '</div>';
        echo '</div>';
        echo '</label>';
        echo '</div>';
    }
}
?>
