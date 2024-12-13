<?php include '../../view/header.php'; ?>
<?php include '../../view/sidebar_admin.php'; ?>
<main>
    <h1>Comptes Administrateurs</h1>
    <?php if (isset($current_admin)) : ?>
    <h2>Mon Compte</h2>
    <p><?php echo $current_admin->getName() .
            ' (' . $current_admin->getEmail() . ')'; ?></p>
    <form action="." method="post">
        <input type="hidden" name="action" value="view_edit">
        <input type="hidden" name="admin_id" 
               value="<?php echo $current_admin->getID(); ?>">
        <input type="submit" value="Edit">
    </form>
    <?php endif; ?>
    <?php if ( count($admins) > 1 ) : ?>
        <h2>Autres Administrateurs</h2>
        <table>
        <?php foreach($admins as $admin):
            if ($admin->getID() != $current_admin->getID()) : ?>
            <tr>
                <td><?php echo $admin->getName() .
                         ' (' . $admin->getEmail() . ')'; ?>
                </td>
                <td>
                    <form action="." method="post" class="inline">
                        <input type="hidden" name="action"
                            value="view_edit">
                        <input type="hidden" name="admin_id"
                            value="<?php echo $admin->getID(); ?>">
                        <input type="submit" value="Edit">
                    </form>
                    <form action="." method="post" class="inline">
                        <input type="hidden" name="action"
                            value="view_delete_confirm">
                        <input type="hidden" name="admin_id"
                            value="<?php echo $admin->getID(); ?>">
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
            <?php endif; ?>
        <?php endforeach; ?>
        </table>
    <?php endif; ?>
    <h2>Ajouter un Administrateur</h2>
    <form action="." method="post" id="add_admin_user_form">
        <input type="hidden" name="action" value="create">
        <label>E-Mail:</label>
        <input type="text" name="email"
               value="<?php echo htmlspecialchars($new_admin->getEmail()); ?>">
        <span class="error"><?php echo $email_message; ?></span>
        <?php echo $fields->getField('email')->getHTML(); ?><br>
        
        <label>Prénom:</label>
        <input type="text" name="first_name"
               value="<?php echo htmlspecialchars($new_admin->getFirstName()); ?>">
        <?php echo $fields->getField('first_name')->getHTML(); ?><br>
        
        <label>Nom:</label>
        <input type="text" name="last_name"
               value="<?php echo htmlspecialchars($new_admin->getLastName()); ?>">
        <?php echo $fields->getField('last_name')->getHTML(); ?><br>
        
        <label>Mot de Passe:</label>
        <input type="password" name="password_1">
        <?php echo $fields->getField('password_1')->getHTML(); ?><br>
        
        <label>Resaissez le Mot de Passe:</label>
        <input type="password" name="password_2">
        <?php echo $fields->getField('password_2')->getHTML(); ?><br>
        
        <label>&nbsp;</label>
        <input type="submit" value="Add Admin User">
    </form>
</main>
<?php include '../../view/footer.php'; ?>