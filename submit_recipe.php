<?php include('includes/header.php'); ?>
<main>
    <h2>Submit a Recipe</h2>
    <form action="save_recipe.php" method="POST">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="short_description">Short Description:</label>
        <textarea id="short_description" name="short_description" required></textarea>
        <label for="ingredients">Ingredients:</label>
        <textarea id="ingredients" name="ingredients" required></textarea>
        <label for="instructions">Instructions:</label>
        <textarea id="instructions" name="instructions" required></textarea>
        <button type="submit">Submit</button>
    </form>
</main>
<?php include('includes/footer.php'); ?>
