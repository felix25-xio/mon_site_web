
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="visiteur.css">
    <title>      </title>
</head>
<body>
<div class="formulaire">
    <div class="title">
        <h2>Authentification</h2>

    </div>
    <div class="form-content">
        <form class="form" name="form1" method="post" action="traitement_visiteur.php">
            <table class="table-format">
                <tr>
                    <td>Name</td>
                    <td class="input-lab">
                        <label>
                            <input name="nom" type="text" id="nom">
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        fitst name
                    </td>
                    <td>
                        <label><input name="prenoms" type="text" id="prenoms"></label>
                    </td>
                </tr>
                <tr>
                    <td>
                        sexe
                    </td>
                    <td>
                        <label><input name="sexe" type="text" id="sexe"></label>
                    </td>
                </tr>
                <tr>
                    <td>date de naissance</td>
                    <td>
                    <label><input name="date_naissance" type="text" id="date_naissance"></label> 
                    </td>
                </tr>
                <tr>
                    <td>mots de passe</td>
                    <td>
                    <label><input name="password" type="text" id="password"></label> 
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td class="bouton"><label><input type="submit" name="Submit" value="Enregistrer"></label></td>
                </tr>
            </table>
        </form>
    </div>
</div>

</body>
</html>