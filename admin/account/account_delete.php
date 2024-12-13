<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main class="nofloat">
    <h1>Supprimer un Compte</h1>
    <p>Etes-vous sûr de vouloir supprimer le compte de
       <?php echo htmlspecialchars($admin->getName()) .
                  ' (' . htmlspecialchars($admin->getEmail()) . ')'; ?>?</p>
    <form action="." method="post">
        <input type="hidden" name="action" value="delete">
        <input type="hidden" name="admin_id"
               value="<?php echo $admin->getID(); ?>">
        <input type="submit" value="Delete Account">
    </form>
    <form action="." method="post">
        <input type="submit" value="Cancel">
    </form>
</main>
<?php include '../../view/footer.php'; ?>