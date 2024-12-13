<!DOCTYPE html>
<html>

<!-- the head section -->
<head>
    <title>Ma Premiere Guitare Shop</title>
    <link rel="stylesheet"
          href="<?php echo $app_path;?>style.css"/>
</head>

<body>
<header>
    <h1>Ma Première Guitare Shop</h1>
    
    <nav>
    
    <ul>
        <li>
            <a href="<?php echo $app_path . 'cart'; ?>">Voir le Panier</a>
        </li>
            <?php
            // Check if user is logged in and
            // display appropriate account links
            $account_url = $app_path . 'account';
            $logout_url = $account_url . '?action=logout';
            if (isset($_SESSION['user_id'])) :
            ?>
                <li><a href="<?php echo $account_url; ?>">Mon compte</a></li>
                <li><a href="<?php echo $logout_url; ?>">Déconnexion</a></li>
            <?php else: ?>
                <li><a href="<?php echo $account_url; ?>">Connexion/Inscription</a></li>
            <?php endif; ?>
        <li>
            <a href="<?php echo $app_path; ?>">Accueil</a>
        </li>
    </ul>
        
    
    <ul>
        <!-- display links for all categories -->
        <?php foreach($categories as $category) :
                $url = $app_path . 'catalog?category_id=' . $category->getID();
                
        ?>
        <li>
            <a href="<?php echo $url; ?>">
               <?php echo htmlspecialchars($category->getName()); ?>
            </a>
        </li>
        <?php endforeach; ?>
    </ul>
    
    
    <ul>
        <li>
            <!-- This link is for testing only.
                 Remove it from a production application. -->
            <a href="<?php echo $app_path; ?>admin">Admin</a>
        </li> 
        <li>
            <button id="darkModeToggle">Basculer le mode sombre</button>
        </li>       
    </ul>
        </nav>

</header>
