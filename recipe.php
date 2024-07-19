<?php include('includes/header.php'); ?>
<main>
    <?php
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        include('recipe-details.php');
    } else {
        echo "Recipe not found.";
    }
    ?>
</main>
<?php include('includes/footer.php'); ?>
