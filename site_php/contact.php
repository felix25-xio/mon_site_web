<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - BB Lomé</title>
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
    <section class="contact" style="max-width: 700px; margin: 2rem auto; background: #fff; border-radius: 12px; box-shadow: 0 2px 12px rgba(0,0,0,0.07); padding: 2rem;">
        <h1>Contactez-nous</h1>
        <form action="#" method="post" class="form-contact">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" required></textarea>
            <button type="submit" class="btn">Envoyer</button>
        </form>
        <div class="coordonnees" style="margin-top:2rem;">
            <h2>Coordonnées</h2>
            <p>Brasserie BB Lomé<br>
            BP 1001 Lomé, Togo<br>
            Tél : +228 22 21 21 21<br>
            Email : contact@bblome.tg</p>
            <h2>Horaires d’ouverture</h2>
            <ul>
                <li>Lundi - Vendredi : 8h00 - 18h00</li>
                <li>Samedi : 9h00 - 13h00</li>
                <li>Dimanche : Fermé</li>
            </ul>
            <h2>Nous situer</h2>
            <div style="margin: 1rem 0;">
                <iframe src="https://www.google.com/maps?q=Brasserie+BB+Lom%C3%A9,+Lom%C3%A9,+Togo&output=embed" width="100%" height="250" style="border:0; border-radius:8px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>
    <footer>
        <p>&copy; 2024 Brasserie BB Lomé. Tous droits réservés.</p>
    </footer>
</body>
</html> 