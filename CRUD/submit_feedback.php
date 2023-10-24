<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $message = $_POST["message"];

    // Establish a database connection (assuming you have already set up the connection)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "recip";
    
    // Create a new PDO instance
    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    // Prepare the SQL statement
    $stmt = $pdo->prepare("INSERT INTO feedback (message) VALUES (:message)");

    // Bind the parameter
    $stmt->bindParam(":message", $message);

    // Execute the query
    if ($stmt->execute()) {
        echo "<h2>Feedback Submitted</h2>";
        echo "<p><strong>Message:</strong> $message</p>";
    } else {
        echo "Error submitting feedback.";
    }
}
?>
