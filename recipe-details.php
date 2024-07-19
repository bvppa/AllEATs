<?php
include('includes/db.php');

if (isset($id)) {
    $sql = "SELECT * FROM recipes WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $recipe = $result->fetch_assoc();

    if ($recipe) {
        echo "<h2>" . $recipe['title'] . "</h2>";
        echo "<p>" . $recipe['short_description'] . "</p>";
        echo "<h3>Ingredients</h3>";
        echo "<p>" . nl2br($recipe['ingredients']) . "</p>";
        echo "<h3>Instructions</h3>";
        echo "<p>" . nl2br($recipe['instructions']) . "</p>";
    } else {
        echo "Recipe not found.";
    }
}
?>
