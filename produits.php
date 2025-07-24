<?php include 'data/produits.php'; ?>
<?php
// Récupérer toutes les catégories uniques
$categories = array_unique(array_map(function($p) { return $p['categorie']; }, $produits));
// Catégorie sélectionnée
$categorie_sel = isset($_GET['categorie']) ? $_GET['categorie'] : '';
// Terme de recherche
$recherche = isset($_GET['recherche']) ? trim($_GET['recherche']) : '';

// Filtrer les produits
$produits_affiches = $produits;

// Filtre par catégorie
if ($categorie_sel) {
    $produits_affiches = array_filter($produits_affiches, function($p) use ($categorie_sel) {
        return $p['categorie'] === $categorie_sel;
    });
}

// Filtre par recherche
if ($recherche) {
    $produits_affiches = array_filter($produits_affiches, function($p) use ($recherche) {
        return stripos($p['nom'], $recherche) !== false || 
               stripos($p['description'], $recherche) !== false;
    });
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catalogue des produits - BB Lomé</title>
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
    <section class="catalogue">
        <h1>Catalogue des produits</h1>
        
        <!-- Barre de recherche -->
        <form method="GET" class="recherche-form">
            <input type="text" name="recherche" placeholder="Rechercher un produit..." 
                   value="<?php echo htmlspecialchars($recherche); ?>" class="recherche-input">
            <?php if ($categorie_sel): ?>
                <input type="hidden" name="categorie" value="<?php echo htmlspecialchars($categorie_sel); ?>">
            <?php endif; ?>
            <button type="submit" class="btn">Rechercher</button>
            <?php if ($recherche || $categorie_sel): ?>
                <a href="produits.php" class="btn btn-secondary">Effacer</a>
            <?php endif; ?>
        </form>
        
        <!-- Filtres par catégorie -->
        <div class="filtres-categories">
            <a href="produits.php<?php echo $recherche ? '?recherche=' . urlencode($recherche) : ''; ?>" 
               class="btn<?php if (!$categorie_sel) echo ' active'; ?>">Toutes</a>
            <?php foreach ($categories as $cat): ?>
                <a href="produits.php?categorie=<?php echo urlencode($cat); ?><?php echo $recherche ? '&recherche=' . urlencode($recherche) : ''; ?>" 
                   class="btn<?php if ($categorie_sel === $cat) echo ' active'; ?>">
                    <?php echo htmlspecialchars($cat); ?>
                </a>
            <?php endforeach; ?>
        </div>
        
        <div class="produits-grid">
            <?php if (empty($produits_affiches)): ?>
                <p class="aucun-resultat">Aucun produit trouvé.</p>
            <?php else: ?>
                <?php foreach ($produits_affiches as $index => $produit): ?>
                    <div class="produit">
                        <?php if (isset($produit['type']) && $produit['type'] === 'video'): ?>
                            <video width="100%" height="140" controls>
                                <source src="<?php echo $produit['image']; ?>" type="video/mp4">
                                Votre navigateur ne supporte pas la lecture vidéo.
                            </video>
                        <?php else: ?>
                            <img src="<?php echo $produit['image']; ?>" alt="<?php echo htmlspecialchars($produit['nom']); ?>">
                        <?php endif; ?>
                        <h3><?php echo htmlspecialchars($produit['nom']); ?></h3>
                        <p><?php echo htmlspecialchars($produit['description']); ?></p>
                        <a href="produit.php?id=<?php echo $index; ?>" class="btn btn-detail">Voir détails</a>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Brasserie BB Lomé. Tous droits réservés.</p>
    </footer>
</body>
</html> 