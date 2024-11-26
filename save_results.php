<?php
$results_dir = "results";

if (!is_dir($results_dir)) {
    mkdir($results_dir, 0777, true);
}

$name = htmlspecialchars($_POST['name']);
$email = htmlspecialchars($_POST['email']);
$question1 = htmlspecialchars($_POST['question1']);
$question2 = htmlspecialchars($_POST['question2']);
$question3 = htmlspecialchars($_POST['question3']);

$file_name = $results_dir . "/" . time() . "_" . preg_replace("/[^a-zA-Z0-9]/", "_", $name) . ".txt";

$content = "Ім'я: $name\n";
$content .= "Email: $email\n";
$content .= "Питання 1: $question1\n";
$content .= "Питання 2: $question2\n";
$content .= "Питання 3: $question3\n";

date_default_timezone_set('Europe/Kyiv');

file_put_contents($file_name, $content);

$formattedTime = date("Y-m-d H:i:s");

echo "<h1>Дякуємо за ваші відповіді!</h1>";
echo "<p>Ваша відповідь була записана {$formattedTime}.</p>";

?>
