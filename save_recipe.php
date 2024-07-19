<?php
include('includes/db.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['user_id'])) {
    $title = $_POST['title'];
    $short_description = $_POST['short_description'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $user_id = $_SESSION['user_id'];

    $sql = "INSERT INTO recipes (title, short_description, ingredients, instructions, user_id) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $title, $short_description, $ingredients, $instructions, $user_id);
    if ($stmt->execute()) {
        echo "Recipe submitted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>
