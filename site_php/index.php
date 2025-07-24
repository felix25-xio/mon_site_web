<?php include 'data/produits.php'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BB Lomé - Accueil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="banniere" style="display: flex; align-items: center; justify-content: space-between; padding: 1rem 2rem; background: #fff; box-shadow: 0 2px 8px rgba(0,0,0,0.04);">
        <div style="display: flex; align-items: center; gap: 20px;">
            <img src="image/logo.png" alt="BB Lomé Logo" class="logo" style="height: 60px;">
        </div>
        <nav style="flex: 1; display: flex; justify-content: flex-end; align-items: center;">
            <ul style="display: flex; gap: 2rem; margin: 0; padding: 0; list-style: none; align-items: center;">
                <li><a href="index.php">Accueil</a></li>
                <li><a href="produits.php">Produits</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="a_propos.php">À propos</a></li>
            </ul>
            <div class="social-icons" style="display: flex; gap: 10px; align-items: center; margin-left: 30px;">
                <a href="https://wa.me/" target="_blank"><img src="image/whatsapp-2105015_1280.jpg" alt="WhatsApp" style="width:28px;height:28px;"></a>
                <a href="https://youtube.com/" target="_blank"><img src="image/youtube-1837872_1280.png" alt="YouTube" style="width:28px;height:28px;"></a>
                <a href="https://linkedin.com/" target="_blank"><img src="image/linkedin-2170421_1280.png" alt="LinkedIn" style="width:28px;height:28px;"></a>
                <a href="https://facebook.com/" target="_blank"><img src="image/facebook-6270532_1280.png" alt="Facebook" style="width:28px;height:28px;"></a>
            </div>
        </nav>
    </header>
    <section class="intro" style="text-align: center; padding: 3rem 1rem 2rem 1rem; background: #FFD600; color: #222;">
        <h1>Bienvenue à la Brasserie BB Lomé</h1>
        <p style="font-size: 1.4rem; font-weight: bold; margin: 1rem 0;">La passion du goût, l’âme du Togo</p>
        <p style="font-size: 1.1rem; max-width: 600px; margin: 0 auto 2rem auto;">Découvrez nos boissons emblématiques, notre passion pour la qualité et notre engagement envers la convivialité togolaise.</p>
        <!-- Vidéo de présentation ou image -->
        <div style="margin: 2rem auto; max-width: 480px;">
            <video width="100%" height="260" controls poster="image/logo.png" style="border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07);">
                <source src="image/Azertyuiop.mp4" type="video/mp4">
                Votre navigateur ne supporte pas la lecture vidéo.
            </video>
        </div>
        <a href="contact.php" class="btn" style="font-size: 1.2rem; padding: 1rem 2.5rem; margin-top: 1.5rem;">Contactez-nous</a>
    </section>
    <section class="produits-vedette">
        <h2>Nos produits en vedette</h2>
        <div class="produits-grid">
            <?php foreach (array_slice($produits, 0, 3) as $produit): ?>
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
                </div>
            <?php endforeach; ?>
        </div>
        <a href="produits.php" class="btn">Voir tous les produits</a>
    </section>
    <footer style="background: #222; color: #fff; text-align: center; padding: 2rem 0; margin-top: 3rem;">
        <div style="max-width: 900px; margin: 0 auto; display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 20px;">
            <div style="text-align: left; min-width: 220px;">
                <strong>Brasserie BB Lomé</strong><br>
                BP 1001 Lomé, Togo<br>
                Tél : +228 22 21 21 21<br>
                Email : contact@bblome.tg
            </div>
            <div style="display: flex; gap: 15px; align-items: center;">
                <a href="https://wa.me/" target="_blank"><img src="image/whatsapp-2105015_1280.jpg" alt="WhatsApp" style="width:28px;height:28px;"></a>
                <a href="https://youtube.com/" target="_blank"><img src="image/youtube-1837872_1280.png" alt="YouTube" style="width:28px;height:28px;"></a>
                <a href="https://linkedin.com/" target="_blank"><img src="image/linkedin-2170421_1280.png" alt="LinkedIn" style="width:28px;height:28px;"></a>
                <a href="https://facebook.com/" target="_blank"><img src="image/facebook-6270532_1280.png" alt="Facebook" style="width:28px;height:28px;"></a>
            </div>
            <div style="text-align: right; min-width: 220px;">
                <a href="#" style="color:#FFD600; text-decoration:underline; margin-right:10px;">Mentions légales</a>
                <a href="#" style="color:#FFD600; text-decoration:underline; margin-right:10px;">Politique de confidentialité</a>
                <a href="#" style="color:#FFD600; text-decoration:underline;">CGU</a>
            </div>
        </div>
        <div style="margin-top: 1.5rem; font-size: 1rem;">
            &copy; 2024 Brasserie BB Lomé. Tous droits réservés.
        </div>
    </footer>
</body>
</html>