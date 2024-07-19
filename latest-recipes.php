<?php
include('includes/db.php');

$sql = "SELECT id, title, short_description FROM recipes ORDER BY created_at DESC LIMIT 5";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='recipe'>";
        echo "<img src='images/recipe" . $row["id"] . ".jpg' alt='" . $row["title"] . "'>";
        echo "<div>";
        echo "<h3>" . $row["title"] . "</h3>";
        echo "<p>" . $row["short_description"] . "</p>";
        echo "<a href='recipe.php?id=" . $row["id"] . "'>Read more</a>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No recipes found.";
}
$conn->close();
?>
