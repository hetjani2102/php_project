<?php
header('Content-Type: application/json');
include 'connection.php';

$sql = "SELECT question, option_a, option_b, option_c, option_d, correct_answer FROM questions ORDER BY RAND() LIMIT 25";
$result = $conn->query($sql);

$questions = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $questions[] = [
            'question' => $row['question'],
            'options' => [$row['option_a'], $row['option_b'], $row['option_c'], $row['option_d']],
            'correct' => $row['correct_answer']
        ];
    }
}

echo json_encode($questions);
?>
