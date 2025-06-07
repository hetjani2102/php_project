<?php
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['feedback'])) {
    $feedback = trim($_POST['feedback']);

    if (!empty($feedback)) {
        $file = fopen("feedbacks.txt", "a");
        fwrite($file, "Feedback: " . $feedback . "\n");
        fwrite($file, "--------------------------\n");
        fclose($file);

        echo "<h2 style='color:green; text-align:center;'> Thank you for your feedback!</h2>";
        echo "<p style='text-align:center;'><a href='home.php'>Back to Home Page</a></p>";
    } else {
        echo "<h2 style='color:red; text-align:center;'> Feedback cannot be empty.</h2>";
        echo "<p style='text-align:center;'><a href='score.html'>Back to Score Page</a></p>";
    }
} else {
    echo "<h2 style='color:red; text-align:center;'>Invalid request.</h2>";
}
?>
