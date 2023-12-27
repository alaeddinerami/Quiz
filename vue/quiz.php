<?php
require_once("../controller/quize.php");

if (empty($_SESSION["pseudo_name"])) {
    header('location:index.php');
} else {
    $name = $_SESSION["pseudo_name"];
}

$currentQuestionId = isset($_SESSION["current_question_id"]) ? $_SESSION["current_question_id"] : $questions[0]["idQuestion"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="h-screen bg-cover bg-center bg-no-repeat bg-fixed backdrop-brightness-50 bg-[url('../images/2020_07_what_is_aws.jpg')]">
    <div class="absolute top-0 left-0 p-2 bg-gray-900 text-white">
        Score: <span id="scoreValue">0</span>
    </div>
    <div class="absolute top-0 right-0 p-2 bg-gray-900 text-white">
        Page: <span id="pageNumber">1</span> / 10
    </div>
    <h1 class="pt-3 text-center text-white text-lg">Welcome <?php echo $name ?></h1>
    <section class="h-5/6 p-5 flex flex-col justify-evenly">
        <h3 class="text-center text-white mb-5 font-medium text-4xl dark:text-white" id="questionText"><?= $questions[0]["Question"] ?></h3>
        <form class="grid w-full gap-6 md:grid-cols-2">
            <?php foreach ($reponse as $index => $response) : ?>

                <div>
                    <input type="radio" id="response-<?php echo $index; ?>" name="hosting" value="" class="hidden peer">
                    <input type="hidden" id="statusR-<?php echo $index; ?>" name="statusReponse[]" value="<?= $response['statusReponse']; ?>">
                    <label for="response-<?php echo $index; ?>" class="inline-flex items-center justify-between w-full p-5 text-gray-500 bg-white border border-gray-200 rounded-lg cursor-pointer dark:hover:text-gray-300 dark:border-gray-700 dark:peer-checked:text-blue-500 peer-checked:border-blue-600 peer-checked:text-blue-600 hover:text-gray-600 hover:bg-gray-100 dark:text-gray-400 dark:bg-gray-800 dark:hover:bg-gray-700">
                        <div class="block">
                            <div class="w-full text-lg font-semibold" id="responseText-<?php echo $index; ?>"><?php echo $response['textReponse']; ?></div>
                        </div>
                    </label>
                </div>
            <?php endforeach; ?>
            <button type="submit" id="next" name="next" class="w-1/2 mt-4 px-4 py-2 bg-amber-500 text-white rounded-md hover:bg-amber-700 focus:outline-none self-end">Start</button>
        </form>
    </section>
    <script>
        let page = 1
        let score = 0
        const pageNumber = document.querySelector("#pageNumber")
        const btnNext = document.querySelector("#next");
        const scoreValue = document.querySelector("#scoreValue")

        let currentQuestionId = <?php echo $currentQuestionId; ?>;

        btnNext.addEventListener("click", function(event) {
            event.preventDefault();


            var checkedRadio = document.querySelector('input[name="hosting"]:checked');
            if (checkedRadio) {
                var hiddenInputValue = checkedRadio.nextElementSibling.value;
                console.log(hiddenInputValue);
                if (hiddenInputValue == 1) {
                    score += 10;
                    scoreValue.textContent = score;
                    fetchNextQuestion();
                }
                fetchNextQuestion();


            } else {
                console.log("ha9");
            }


        });

        function fetchNextQuestion() {

            page++;
            if (page <= 10) {
                pageNumber.textContent = page;
                fetch('./../controller/qzz.php', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                        },

                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        currentQuestionId = data.question[0].idQuestion;
                        updateUI(data);
                    })
                    .catch((error) => {
                        console.error('Error:', error);
                    });
            } else {
                window.location.replace("resuls")
            }


        }

        function updateUI(data) {
            // Update question 


            console.log(data);
            document.querySelector('#questionText').textContent = data.question[0].Question;


            const responsesArray = data.responses;

            console.log(responsesArray);

            responsesArray.forEach((response, index) => {
                const responseElement = document.querySelector(`#response-${index}`);
                const statusInput = document.querySelector(`#statusR-<?php echo $index; ?>`);
                const responseTextElement = document.querySelector(`#responseText-${index}`);

                statusInput.value = response.statusReponse

                responseElement.value = response.textReponse
                responseTextElement.textContent = response.textReponse

                responseElement.checked = false;


            });
        }
    </script>
</body>

</html>