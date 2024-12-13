<?php include '../view/header.php'; ?>
<main>
    <h1>Database Error</h1>
    <p>Une erreur est survenue lors de la connexion à la base de données.</p>
    
    <p>Message d'Erreur: <?php echo $error_message; ?></p>
</main>
<?php include '../view/footer.php'; ?>