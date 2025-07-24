<?php include 'data/produits.php'; ?>
<?php
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
if (!isset($produits[$id])) {
    header('Location: produits.php');
    exit;
}
$produit = $produits[$id];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($produit['nom']); ?> - BB Lomé</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="banniere">
        <img src="image/logo.png" alt="BB Lomé Logo" class="logo">
        <nav>
            <ul>
                <li><a href="index.php">Accueil</a></li>
                <li><a href="produits.php">Produits</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="detail-produit">
        <div class="produit-container">
            <div class="produit-image">
                <img src="<?php echo $produit['image']; ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
            </div>
            <div class="produit-info">
                <h1><?php echo htmlspecialchars($produit['nom']); ?></h1>
                <p class="categorie">Catégorie : <?php echo htmlspecialchars($produit['categorie']); ?></p>
                <p class="description"><?php echo htmlspecialchars($produit['description']); ?></p>
                
                <!-- Informations supplémentaires si disponibles -->
                <?php if (isset($produit['ingredients'])): ?>
                    <div class="info-section">
                        <h3>Ingrédients</h3>
                        <p><?php echo htmlspecialchars($produit['ingredients']); ?></p>
                    </div>
                <?php endif; ?>
                
                <?php if (isset($produit['contenance'])): ?>
                    <div class="info-section">
                        <h3>Contenance</h3>
                        <p><?php echo htmlspecialchars($produit['contenance']); ?></p>
                    </div>
                <?php endif; ?>
                
                <div class="actions">
                    <a href="produits.php" class="btn">Retour au catalogue</a>
                    <a href="contact.php" class="btn btn-secondary">Nous contacter</a>
                </div>
            </div>
        </div>
        
        <!-- Navigation vers les produits précédent/suivant -->
        <div class="navigation-produits">
            <?php if ($id > 0): ?>
                <a href="produit.php?id=<?php echo $id - 1; ?>" class="btn">← Produit précédent</a>
            <?php endif; ?>
            
            <?php if ($id < count($produits) - 1): ?>
                <a href="produit.php?id=<?php echo $id + 1; ?>" class="btn">Produit suivant →</a>
            <?php endif; ?>
        </div>
    </section>
    
    <footer>
        <p>&copy; 2024 Brasserie BB Lomé. Tous droits réservés.</p>
    </footer>
</body>
</html> 