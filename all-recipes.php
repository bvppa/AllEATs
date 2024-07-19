<?php
include('includes/db.php');

$sql = "SELECT * FROM recipes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<div class='recipe'>";
        
        
        if (isset($row['image']) && !empty($row['image'])) {
            echo "<img src='images/" . htmlspecialchars($row['image'], ENT_QUOTES, 'UTF-8') . "' alt='" . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . "'>";
        } else {
            echo "<img src='images/default-recipe.jpg' alt='Default Image'>"; 
        }
        
        echo "<h3>" . htmlspecialchars($row['title'], ENT_QUOTES, 'UTF-8') . "</h3>";
        echo "<p>" . htmlspecialchars($row['short_description'], ENT_QUOTES, 'UTF-8') . "</p>";
        echo "<a href='recipe.php?id=" . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . "'>Read more</a>";
        echo "</div>";
    }
} else {
    echo "No recipes found.";
}
?>
