<?php
session_start();
$host = "localhost";
$user = "root";
$password = "";
$dbname = "testsys";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$limit = 10; 

if (!isset($_SESSION['user_questions'])) {
    $result = $conn->query("SELECT * FROM questions ORDER BY RAND() LIMIT $limit");

    $questions = [];
    while ($row = $result->fetch_assoc()) {
        $questions[] = [
            'question' => $row['question'],
            'options' => [$row['option1'], $row['option2'], $row['option3'], $row['option4']],
            'correct' => $row['correct_answer']
        ];
    }

    
    $_SESSION['user_questions'] = $questions;
} else {
    $questions = $_SESSION['user_questions'];
}

header('Content-Type: application/json');
echo json_encode($questions);
?>
